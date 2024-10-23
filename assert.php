<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (isset($_REQUEST['code'])) {

    $code = $_REQUEST['code'];


    if (preg_match('/^[a-zA-Z0-9\s\+\-\*\/\(\)]+$/', $code)) {

        eval('$code=function() { '.$code.' };');
        $code();
    } else {
        echo "Invalid code provided.";
    }
} else {
    echo "No code provided.";
}
?>
