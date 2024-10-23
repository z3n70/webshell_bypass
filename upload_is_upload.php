<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file_upload'])) {
    $file = $_FILES['file_upload'];

    if (is_uploaded_file($file['tmp_name'])) {
        $targetDirectory = './'; // Ganti dengan direktori tujuan di server
        $targetPath = $targetDirectory . basename($file['name']);

        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            echo "File berhasil diunggah dan disimpan dengan nama: " . $file['name'];
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau tidak diunggah melalui formulir.";
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

