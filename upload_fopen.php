<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file_upload'])) {
    $file = $_FILES['file_upload'];

    if ($file['error'] === UPLOAD_ERR_OK) {
        $targetDirectory = 'uploads/'; // Ganti dengan direktori tujuan di server
        $targetPath = $targetDirectory . basename($file['name']);

        // Pindahkan file yang diunggah dari direktori sementara ke lokasi tujuan
        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            echo "File berhasil diunggah dan disimpan dengan nama: " . $file['name'];

            // Buka file tujuan untuk menulis data ke dalamnya dengan fopen()
            $fileHandle = fopen($targetPath, 'wb');
            if ($fileHandle) {
                $content = "Contoh isi file.";
                fwrite($fileHandle, $content);
                fclose($fileHandle);
                echo "<br><br>Isi File:<br>" . htmlspecialchars($content);
            } else {
                echo "<br><br>Gagal membuka file untuk menulis.";
            }
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "Error saat mengunggah file: " . $file['error'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Upload File</title>
</head>
<body>
    <h2>Form Upload File</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file_upload">
        <button type="submit">Upload</button>
    </form>
</body>
</html>

