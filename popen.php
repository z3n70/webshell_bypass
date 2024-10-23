<?php
$handle = popen('id', 'r');
if ($handle) {
    while (!feof($handle)) {
        $output = fgets($handle);
        echo $output;
    }
    pclose($handle);
}
?>
