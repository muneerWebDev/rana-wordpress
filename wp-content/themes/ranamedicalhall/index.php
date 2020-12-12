<?php
get_header();

function is_blog()
{
    return (is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

?>
<style>
    .page-wrapper {
        min-height: calc(100vh - 619px);
    }
</style>

<div class="page-wrapper py-5">
    <div class="container py-3">

        <script>
            $(document).ready(function() {
                if ($(window).width() > 767) {
                    var mainBlogHeight = $(".col-12 .main-blog-wrapper:first-child .blog-col-wrap").height();
                    var blogArticleHEight = $(".col-12 .main-blog-wrapper:first-child .blog-article-wrap").innerHeight();
                    var marginHEight = 30 - (mainBlogHeight - blogArticleHEight);

                    $(".col-12 .main-blog-wrapper:nth-child(2)").css('margin-top', marginHEight);
                }
            });
        </script>
        <div class="row">
            <div class="col-12">
                <?php
                $blogPrinted = false;
                if (have_posts()) : while (have_posts()) : the_post();

                        if (is_blog()) {
                            $blogPrinted = true;
                ?>
                            <div class="main-blog-wrapper">
                                <div class="row">
                                    <div class="col-md-8 blog-col-wrap">
                                        <div class="blog-article-wrap">
                                            <?php
                                            if (!get_field('hide_featured_image', get_the_ID(), true)) {  ?>
                                                <div class="featured-image"><?php the_post_thumbnail('full'); ?> </div>
                                            <?php }

                                            $author_id = get_post_field('post_author', get_the_ID());
                                            ?>


                                            <h1 class="blog-main-title"><?php the_title(); ?></h1>
                                            <div class="meta-post-details">
                                                <label class="author-name" style="margin-right: 10px;">
                                                    <?php
                                                    echo '<i class="fa fa-user" aria-hidden="true"></i> ' . ucfirst((get_the_author_meta('user_lastname', $author_id) != '' ? get_the_author_meta('user_lastname', $author_id) : get_the_author_meta('nickname', $author_id)));
                                                    ?>

                                                </label>
                                                <label class="post-date" style="margin-right: 10px;"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?></label>
                                            </div>
                                            <?php if (!get_field('hide_tags', get_the_ID(), true)) { ?>
                                                <div class="post-tags">
                                                    <?php
                                                    $posttags = get_the_tags();
                                                    if ($posttags) {
                                                        foreach ($posttags as $tag) {
                                                            echo '<a href="' . get_tag_link($tag->term_id) . '"  class="post-tag"><i class="fa fa-tag" aria-hidden="true"></i> ' . $tag->name . '</a>';
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            <?php } ?>

                                            <div class="content-wrap">
                                                <?php the_content(); ?>
                                            </div>

                                        </div>
                                        <div class="navigation">
                                            <?php if (is_single()) { ?>
                                                <div class="previous-button"><?php next_post_link('%link', '<< Previous'); ?></div>
                                                <div class="next-button">
                                                    <?php previous_post_link('%link', 'Next >>'); ?></div>
                                            <?php } ?>
                                        </div>

                                    </div>
                                    <div class="col-md-4 mt-5 mt-md-0">
                                        <section class="customSidebar">
                                            <div class="row">
                                                <?php


                                                if (is_active_sidebar('partner-slide')) : ?>

                                                    <div id="widget-sidebar">
                                                        <ul>
                                                            <?php dynamic_sidebar('partner-slide'); ?>
                                                        </ul>
                                                    </div><!-- #widget-sidebar .widget-area -->

                                                <?php endif; ?>


                                                <div class="col-12 blog-sidebar">

                                                    <div class="recent-wrap">
                                                        <h2>Dr Althaf's Posts</h2>

                                                        <div class="posts-wrap">
                                                            <?php
                                                            $recent_args = array(
                                                                "posts_per_page" => 5,
                                                                "orderby"        => "date",
                                                                "order"          => "DESC"
                                                            );

                                                            $recent_posts = new WP_Query($recent_args);
                                                            if ($recent_posts->have_posts()) :
                                                                while ($recent_posts->have_posts()) :

                                                                    $recent_posts->the_post();
                                                            ?>
                                                                    <a class="item" href="<?php echo the_permalink(); ?>">
                                                                        <h3><?php echo the_title(); ?></h3>

                                                                        <span class="date"> <i class="fa fa-calendar" aria-hidden="true" class="mr-3"></i> <b><?php echo get_the_date('M j, Y'); ?></b></span>
                                                                    </a>


                                                            <?php

                                                                // ... Use regular 'the_title()', 'the_permalink()', etc. loop functions here.

                                                                endwhile;
                                                            endif;
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div class="monthly-archieve">
                                                        <h2>Dr Rana's Archives</h2>
                                                        <?php
                                                        $currentyear = date("Y");
                                                        $years = range($currentyear, 1950);

                                                        rsort($years);
                                                        foreach ($years as $year) { ?>
                                                            <?php
                                                            $archi = wp_get_archives('echo=0&show_post_count=1&type=monthly&year=' . $year);
                                                            $archi = explode('</li>', $archi);
                                                            $links = array();

                                                            foreach ($archi as $link) {
                                                                $link = str_replace(array('<li>', "\n", "\t", "\s"), '', $link);
                                                                if ('' != $link)
                                                                    $links[] = $link;
                                                                else
                                                                    continue;
                                                            }
                                                        }

                                                        $fliplinks = $links; //array_reverse($links);
                                                        if (!empty($fliplinks)) {
                                                            echo '<div class="month-wrapper">';
                                                            foreach ($fliplinks as $link) {
                                                                echo '<h3 class="month-link">' . $link . '</h3>';
                                                            }
                                                            echo '</div>';
                                                        } else {
                                                            echo '<dd class="tree-accordion-empty"></dd>';

                                                            ?>

                                                        <?php } ?>

                                                    </div>

                                                </div>


                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else { ?>


                            <div class="row astraThemeCalled">
                                <div class="col-md-8 px-15">
                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                        <img src="<?php echo $image[0]; ?>" alt="" class="img-fluid">
                                    <?php endif; ?>
                                    <?php

                                    the_content(); ?>
                                </div>

                                <div class="col-md-4 order-1 order-md-2">
                                    <section class="customSidebar">
                                        <div class="row">
                                            <?php


                                            if (is_active_sidebar('partner-slide')) : ?>

                                                <div id="widget-sidebar">
                                                    <ul>
                                                        <?php dynamic_sidebar('partner-slide'); ?>
                                                    </ul>
                                                </div><!-- #widget-sidebar .widget-area -->

                                            <?php endif; ?>



                                        </div>
                                    </section>
                                </div>
                            </div>
                        <?php
                        }

                        if ($blogPrinted) {
                        ?>



                    <?php
                        }

                    endwhile;
                else : ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif;
                get_sidebar()
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>