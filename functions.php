<?php
    $passLength = $_GET["length"];
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!£$%&=?';

    $alphabetLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < $passLength; $i++) {
        $n = rand(0, $alphabetLength);
        $pass .= $alphabet[$n];
    }
?>