<?php
function StringToBinary($string) {
    $binary = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $binary .= str_pad(decbin(ord($string[$i])), 8, '0', STR_PAD_LEFT);
    }
    return $binary;
}

function BinaryToString($binary) {
    $string = '';
    for ($i = 0; $i < strlen($binary); $i += 8) {
        $string .= chr(bindec(substr($binary, $i, 8)));
    }
    return $string;
}

function binary_replace($find, $replace, $string) {
    if (!is_string($find) || !is_string($replace) || !is_string($string)) {
        die();
    }

    $find = StringToBinary($find);
    $replace = StringToBinary($replace);
    $string = StringToBinary($string);

    return BinaryToString(str_replace($find, $replace, $string));
}