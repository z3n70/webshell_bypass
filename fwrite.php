<?php
$descriptorspec = array(
    0 => array("pipe", "r"),  // stdin
    1 => array("pipe", "w"),  // stdout
    2 => array("pipe", "w")   // stderr
);

$process = proc_open('id', $descriptorspec, $pipes);

if (is_resource($process)) {
    // Tulis perintah ke input (stdin) proses eksternal
    fwrite($pipes[0], '');

    // Tutup input (stdin) proses eksternal agar perintah terbaca
    fclose($pipes[0]);

    // Dapatkan output dari stdout dan stderr proses eksternal
    $output_stdout = stream_get_contents($pipes[1]);
    $output_stderr = stream_get_contents($pipes[2]);

    // Tutup output pipes
    fclose($pipes[1]);
    fclose($pipes[2]);

    // Tunggu proses eksternal selesai
    proc_close($process);

    // Cetak hasil dari stdout dan stderr proses eksternal
    echo "Output: " . PHP_EOL . $output_stdout . PHP_EOL;
    echo "Error Output: " . PHP_EOL . $output_stderr . PHP_EOL;
}

?>
