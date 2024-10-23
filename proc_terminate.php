<?php
$process = proc_open('id', $descriptorspec, $pipes);

// Lakukan beberapa tugas lainnya...

// Hentikan proses menggunakan proc_terminate()
proc_terminate($process);
?>
