<?php
$id = $_GET['id'];

// Lakukan sanitasi dan validasi pada $id sesuai kebutuhan Anda

$command = 'ls';
$args = array('-l', $id);

pcntl_exec($command, $args);
?>
