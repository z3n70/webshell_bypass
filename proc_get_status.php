<?php
$descriptorspec = array(
    0 => array("pipe", "r"),  // stdin
    1 => array("pipe", "w"),  // stdout
    2 => array("pipe", "w")   // stderr
);

$process = proc_open('id', $descriptorspec, $pipes);

if (is_resource($process)) {
    // Dapatkan informasi status proses
    $status = proc_get_status($process);

    // Cetak informasi status
    echo "PID: " . $status['pid'] . PHP_EOL;
    echo "Command: " . $status['command'] . PHP_EOL;
    echo "Running: " . ($status['running'] ? 'Yes' : 'No') . PHP_EOL;
    echo "Exit Code: " . $status['exitcode'] . PHP_EOL;

    // Tutup proses dan pipa
    fclose($pipes[0]);
    fclose($pipes[1]);
    fclose($pipes[2]);
    proc_close($process);
}

?>
