<?php
function randomPassword($pswd_lgt)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $pswd_lgt; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}
