<?php
/*
# @Author: Night Tac
# @Date:  2023-10-11
*/

error_reporting(0);

highlight_file(__FILE__);

include 'flag.php';
include 'function.php';

if (isset($_GET['iwant'])) {
    $YouWant = $_GET['iwant'];
    $YouWant = binary_replace('f', '', $YouWant);

    if ($YouWant == 'flag') {
        echo '<br><br>Here is your FLAG: '.$flag;
    }
    else {
        echo '<br><br>NoNoNo, You just want \''.$YouWant.'\' :>';
    }
}

echo '<br><br>Try binary_replace: '.binary_replace($_GET[1], $_GET[2], $_GET[3]);