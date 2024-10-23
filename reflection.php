<?php
$command = 'id';

// Using reflection to call the method dynamically
$reflection = new ReflectionFunction('passthru');
$reflection->invoke($command);
?>

