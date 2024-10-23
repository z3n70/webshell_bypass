<?php
$id = $_GET['id'];

// Melakukan sanitasi dan validasi pada $id

$command = '/';
$args = array($id);

pcntl_exec($command, $args);
?>
