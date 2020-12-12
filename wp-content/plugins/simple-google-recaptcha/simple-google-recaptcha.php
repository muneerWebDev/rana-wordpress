<?php
/*
* Plugin Name: Simple Google reCAPTCHA
* Description: Simply protect your WordPress against spam comments and brute-force attacks, thanks to Google reCAPTCHA!
* Version: 3.7
* Author: Michal Novák
* Author URI: https://www.novami.cz
* License: GPL3
* Text Domain: simple-google-recaptcha
*/

if (!defined('ABSPATH')) {
    die('Direct access not allowed!');
}


/**
 * Class SimpleGoogleRecaptcha
 */
class SimpleGoogleRecaptcha
{
    const UPDATE = 'update';
    const DISABLE = 'disable';

    const SGR_V2 = 'v2 "I\'m not a robot" Checkbox';
    const SGR_V3 = 'v3';

    const SGR_MAIN = 'sgr_main';
    const SGR_ACTION = 'sgr_action';
    const SGR_TEXT_DOMAIN = 'simple-google-recaptcha';
    const SGR_PAGE_OPTIONS_QUERY = '?page=sgr_options';

    const SGR_OPTION_VERSION = 'sgr_version';
    const SGR_OPTION_LOGIN_DISABLE = 'sgr_login_disable';
    const SGR_OPTION_BADGE_HIDE = 'sgr_badge_hide';
    const SGR_OPTION_SITE_KEY = 'sgr_site_key';
    const SGR_OPTION_SECRET_KEY = 'sgr_secret_key';
    const SGR_OPTION_HASH = 'sgr_hash';

    private $pluginName;
    private $version;
    private $loginDisable;
    private $badgeHide;
    private $siteKey;
    private $secretKey;

    private $recaptchaResponse;

    /**
     * SimpleGoogleRecaptcha constructor.
     */
    public function __construct()
    {
        add_action('init', [$this, 'run']);
        add_action('activated_plugin', [$this, 'activation']);
    }

    public function updateSettings()
    {
        if (current_user_can('manage_options')) {
            $hash = null;
            $options = [self::SGR_OPTION_VERSION, self::SGR_OPTION_LOGIN_DISABLE, self::SGR_OPTION_BADGE_HIDE, self::SGR_OPTION_SITE_KEY, self::SGR_OPTION_SECRET_KEY];

            foreach ($options as $option) {
                $postValue = filter_input(INPUT_POST, $option, FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
                update_option($option, $postValue);

                if (substr_count($option, 'key')) {
                    $hash .= $postValue;
                }
            }
            setcookie(self::SGR_OPTION_HASH, md5($hash), time() + 60 * 60 * 24 * 10, '/');
        }
    }

    /**
     * @param $links
     * @return array
     */
    public function action_links($links)
    {
        return array_merge(['settings' => sprintf('<a href="options-general.php%s">%s</a>', self::SGR_PAGE_OPTIONS_QUERY, __('Settings', self::SGR_TEXT_DOMAIN))], $links);
    }

    public function activation($plugin)
    {
        if ($plugin === plugin_basename(__FILE__) && (!get_option(self::SGR_OPTION_SITE_KEY) || !get_option(self::SGR_OPTION_SECRET_KEY))) {
            exit(wp_redirect(admin_url(sprintf('options-general.php%s', self::SGR_PAGE_OPTIONS_QUERY))));
        }
    }

    public function options_page()
    {
        echo sprintf('<div class="wrap"><h1>%s - %s</h1><form method="post" action="%s">', $this->pluginName, __('Settings', self::SGR_TEXT_DOMAIN), self::SGR_PAGE_OPTIONS_QUERY);

        settings_fields('sgr_header_section');
        do_settings_sections('sgr_options');

        submit_button();

        echo sprintf('<input type="hidden" name="%s" value="%s">%s</form>%s</div>', self::SGR_ACTION, self::UPDATE, PHP_EOL, $this->messageProtectionStatus());
    }

    public function menu()
    {
        $this->enqueue_main();
        add_submenu_page('options-general.php', $this->pluginName, 'Google reCAPTCHA', 'manage_options', 'sgr_options', [$this, 'options_page']);
        add_action('admin_init', [$this, 'display_options']);
    }

    public function display_sgr_site_key()
    {
        echo sprintf('<input type="text" name="%1$s" class="regular-text" id="%1$s" value="%2$s" />', self::SGR_OPTION_SITE_KEY, $this->siteKey);
    }

    public function display_sgr_secret_key()
    {
        echo sprintf('<input type="text" name="%1$s" class="regular-text" id="%1$s" value="%2$s" />', self::SGR_OPTION_SECRET_KEY, $this->secretKey);
    }

    public function display_sgr_login_disable()
    {
        echo sprintf('<input type="checkbox" name="%1$s" id="%1$s" value="1" %2$s />', self::SGR_OPTION_LOGIN_DISABLE, checked(1, $this->loginDisable, false));
    }

    public function display_sgr_version()
    {
        echo sprintf('<input type="checkbox" name="%1$s" id="%1$s" value="3" %2$s />', self::SGR_OPTION_VERSION, checked(3, $this->version, false));
    }

    public function display_sgr_badge_hide()
    {
        echo sprintf('<input type="checkbox" name="%1$s" id="%1$s" value="1" %2$s />', self::SGR_OPTION_BADGE_HIDE, checked(1, $this->badgeHide, false));
    }

    public function display_options()
    {
        $fields = [
            ['id' => self::SGR_OPTION_SITE_KEY, 'label' => __('Site Key', self::SGR_TEXT_DOMAIN)],
            ['id' => self::SGR_OPTION_SECRET_KEY, 'label' => __('Secret Key', self::SGR_TEXT_DOMAIN)],
            ['id' => self::SGR_OPTION_LOGIN_DISABLE, 'label' => __('Disable on login form', self::SGR_TEXT_DOMAIN)],
            ['id' => self::SGR_OPTION_VERSION, 'label' => __('Enable reCAPTCHA v3', self::SGR_TEXT_DOMAIN)],
            ['id' => self::SGR_OPTION_BADGE_HIDE, 'label' => __('Hide reCAPTCHA v3 badge', self::SGR_TEXT_DOMAIN)],
        ];

        add_settings_section('sgr_header_section', __('Google reCAPTCHA keys', self::SGR_TEXT_DOMAIN), [], 'sgr_options');

        foreach ($fields as $field) {
            add_settings_field($field['id'], $field['label'], [$this, sprintf('display_%s', $field['id'])], 'sgr_options', 'sgr_header_section');
            register_setting('sgr_header_section', $field['id']);
        }
    }

    public function enqueue_main()
    {
        $jsName = 'sgr.js';
        $jsPath = plugin_dir_path(__FILE__) . $jsName;

        wp_enqueue_script(self::SGR_MAIN, plugin_dir_url(__FILE__) . $jsName, [], filemtime($jsPath));
        wp_localize_script(self::SGR_MAIN, self::SGR_MAIN, [self::SGR_OPTION_SITE_KEY => $this->siteKey]);

        $cssName = 'sgr.css';
        $cssPath = plugin_dir_path(__FILE__) . $cssName;

        wp_enqueue_style(self::SGR_MAIN, plugin_dir_url(__FILE__) . $cssName, [], filemtime($cssPath));
    }

    public function enqueue_scripts()
    {
        $apiUrlBase = sprintf('https://www.recaptcha.net/recaptcha/api.js?hl=%s', get_locale());
        $jsUrl = sprintf('%s&onload=sgr_2&render=explicit', $apiUrlBase);

        if ($this->version === 3) {
            $jsUrl = sprintf('%s&render=%s&onload=sgr_3', $apiUrlBase, $this->siteKey);
        }

        wp_enqueue_script('sgr_recaptcha', $jsUrl, [], time());
    }

    public function frontend()
    {
        $this->enqueue_main();

        $sgr_display_list = [
            'comment_form_after_fields',
            'register_form',
            'lostpassword_form',
            'woocommerce_register_form',
            'woocommerce_lostpassword_form',
            'bp_after_signup_profile_fields',
        ];

        $sgr_verify_list = [
            'preprocess_comment',
            'registration_errors',
            'lostpassword_post',
            'woocommerce_register_post',
            'bp_signup_validate'
        ];

        if (!$this->loginDisable) {
            array_push($sgr_display_list, 'login_form', 'woocommerce_login_form');
            array_push($sgr_verify_list, 'wp_authenticate_user');
        }

        $sgrDisplay = $this->version === 3 ? 'v3_display' : 'v2_display';

        foreach ($sgr_display_list as $sgr_display) {
            add_action($sgr_display, [$this, 'enqueue_scripts']);
            add_action($sgr_display, [$this, $sgrDisplay]);
        }

        foreach ($sgr_verify_list as $sgr_verify) {
            add_action($sgr_verify, [$this, 'verify']);
        }
    }

    public function v2_display()
    {
        $this->displayDisableProtection();

        echo '<div class="sgr-main"></div>';
    }

    public function v3_display()
    {
        $badgeText = null;

        if ($this->badgeHide) {
            $cssName = 'sgr_hide.css';
            $cssPath = plugin_dir_path(__FILE__) . $cssName;
            $cssVersion = filemtime($cssPath);

            wp_enqueue_style('sgr_hide', plugin_dir_url(__FILE__) . $cssName, [], $cssVersion);

            $badgeText = sprintf('%s<p class="sgr-infotext">%s</p>', PHP_EOL, __('This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.', self::SGR_TEXT_DOMAIN));
        }

        $this->displayDisableProtection();

        echo sprintf('<input type="hidden" name="g-recaptcha-response" class="sgr-main">%s', $badgeText);
    }

    private function displayDisableProtection()
    {
        if ($this->adminCookieHash()) {
            echo sprintf('<p class="sgr-infotext"><a href="?%s=%s">%s</a></p>', self::SGR_ACTION, self::DISABLE, __('Emergency reCAPTCHA deactivate', self::SGR_TEXT_DOMAIN));
        }
    }

    private function disableProtection()
    {
        if ($this->adminCookieHash()) {
            delete_option(self::SGR_OPTION_SITE_KEY);
            delete_option(self::SGR_OPTION_SECRET_KEY);

            $this->siteKey = $this->secretKey = null;
        }
    }

    /**
     * @param $error_code
     * @return string|void|null
     */
    private function errorMessage($error_code)
    {
        $error_message = null;

        switch ($error_code) {
            case 'missing-input-secret':
                $error_message = __('The secret parameter is missing.', self::SGR_TEXT_DOMAIN);
                break;
            case 'missing-input-response':
                $error_message = __('The response parameter is missing.', self::SGR_TEXT_DOMAIN);
                break;
            case 'invalid-input-secret':
                $error_message = __('The secret parameter is invalid or malformed.', self::SGR_TEXT_DOMAIN);
                break;
            case 'invalid-input-response':
                $error_message = __('The response parameter is invalid or malformed.', self::SGR_TEXT_DOMAIN);
                break;
            case 'bad-request':
                $error_message = __('The request is invalid or malformed.', self::SGR_TEXT_DOMAIN);
                break;
            case 'timeout-or-duplicate':
                $error_message = __('The response is no longer valid: either is too old or has been used previously.', self::SGR_TEXT_DOMAIN);
                break;
        }

        return $error_message;
    }

    private function recaptchaResponse()
    {
        $recaptchaResponse = filter_input(INPUT_POST, 'g-recaptcha-response', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $response = (array)wp_remote_get(sprintf('https://www.recaptcha.net/recaptcha/api/siteverify?secret=%s&response=%s', $this->secretKey, $recaptchaResponse));

        $this->recaptchaResponse = isset($response['body']) ? json_decode($response['body'], 1) : ['success' => false, 'error-codes' => ['general-fail']];
    }

    /**
     * @param $input
     * @return mixed
     */
    public function verify($input)
    {
        $this->recaptchaResponse();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['g-recaptcha-response'])) {
            $recaptcha_error_code = isset($this->recaptchaResponse['error-codes'][0]) ? $this->recaptchaResponse['error-codes'][0] : null;
            $error_message = $this->errorMessage($recaptcha_error_code);

            if ((int)$this->recaptchaResponse['success'] === 1) {
                return $input;
            } else {
                wp_die(sprintf('<p><strong>%s</strong> Google reCAPTCHA %s. %s</p>', __('Error:', self::SGR_TEXT_DOMAIN), __('verification failed', self::SGR_TEXT_DOMAIN), $error_message), 'reCAPTCHA', ['response' => 403, 'back_link' => 1]);
            }
        } else {
            wp_die(sprintf('<p><strong>%s</strong> Google reCAPTCHA %s. %s</p>', __('Error:', self::SGR_TEXT_DOMAIN), __('verification failed', self::SGR_TEXT_DOMAIN), __('Do you have JavaScript enabled?', self::SGR_TEXT_DOMAIN)), 'reCAPTCHA', ['response' => 403, 'back_link' => 1]);
        }
    }

    /**
     * @return string
     */
    public function messageProtectionStatus()
    {
        $type = $this->version === 3 ? self::SGR_V3 : self::SGR_V2;

        if (!$this->siteKey || !$this->secretKey) {
            return sprintf('<div class="notice notice-error"><p><strong>%s</strong> Google reCAPTCHA %s!</p><p>%s</p></div>', __('Warning:', self::SGR_TEXT_DOMAIN), __('is disabled', self::SGR_TEXT_DOMAIN), sprintf(__('You have to <a href="https://www.google.com/recaptcha/admin" rel="external">register your domain</a>, get required Google reCAPTCHA keys %s and save them bellow.', self::SGR_TEXT_DOMAIN), $type));
        } else {
            return sprintf('<div class="notice notice-warning"><p><strong>%s</strong> Google reCAPTCHA %s!</p><p>%s</p></div>', __('Notice:', self::SGR_TEXT_DOMAIN), __('is enabled', self::SGR_TEXT_DOMAIN), __('Keep on mind, that in case of emergency, you can disable this plugin via FTP access, just rename the plugin folder.', self::SGR_TEXT_DOMAIN));
        }
    }

    /**
     * @return bool
     */
    public function adminCookieHash()
    {
        $cookieHash = filter_input(INPUT_COOKIE, self::SGR_OPTION_HASH, FILTER_SANITIZE_SPECIAL_CHARS);
        if ($cookieHash === md5($this->siteKey . $this->secretKey)) {
            return true;
        } else {
            return false;
        }
    }

    public function run()
    {
        $this->pluginName = get_file_data(__FILE__, ['Name' => 'Plugin Name'])['Name'];

        $postAction = filter_input(INPUT_POST, self::SGR_ACTION, FILTER_SANITIZE_SPECIAL_CHARS);
        if ($postAction === self::UPDATE) {
            $this->updateSettings();
        }

        $this->siteKey = filter_var(get_option(self::SGR_OPTION_SITE_KEY), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $this->secretKey = filter_var(get_option(self::SGR_OPTION_SECRET_KEY), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $this->version = (int)filter_var(get_option(self::SGR_OPTION_VERSION), FILTER_SANITIZE_NUMBER_INT);
        $this->loginDisable = (int)filter_var(get_option(self::SGR_OPTION_LOGIN_DISABLE), FILTER_SANITIZE_NUMBER_INT);
        $this->badgeHide = (int)filter_var(get_option(self::SGR_OPTION_BADGE_HIDE), FILTER_SANITIZE_NUMBER_INT);

        $getAction = filter_input(INPUT_GET, self::SGR_ACTION, FILTER_SANITIZE_SPECIAL_CHARS);
        if ($getAction === self::DISABLE) {
            $this->disableProtection();
        }

        add_filter(sprintf('plugin_action_links_%s', plugin_basename(__FILE__)), [$this, 'action_links']);
        add_action('admin_menu', [$this, 'menu']);

        if (!is_user_logged_in() && !wp_doing_ajax() && !function_exists('wpcf7_contact_form_shortcode') && $this->siteKey && $this->secretKey) {
            $this->frontend();
        }
    }
}

new SimpleGoogleRecaptcha();
