<?php
$location = realpath(dirname(__FILE__));
require_once $location . '/function.php';
$binaryString = '01010100 01101000 01101001 01110011 00100000 01101001 01110011 00100000 01100001 00100000 01110100 01100101 01110011 01110100 00101110';
$delimiter = ' ';
$return = binaryToString($binaryString, $delimiter);
var_dump($return);