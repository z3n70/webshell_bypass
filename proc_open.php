<?php
$descriptorspec = array(
  0 => array("pipe", "r"), // stdin
  1 => array("pipe", "w"), // stdout
  2 => array("pipe", "w")  // stderr
);

$process = proc_open('ls', $descriptorspec, $pipes);

if (is_resource($process)) {
    $output = stream_get_contents($pipes[1]);
    fclose($pipes[1]);

    echo $output;

    proc_close($process);
}
?>
