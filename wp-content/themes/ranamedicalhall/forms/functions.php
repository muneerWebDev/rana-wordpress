<?php
function reCapChk($secret, $response)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,'secret='.$secret.'&response='.$response);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result);
}

 