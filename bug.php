<?php

$commands = [
  'exec' => 'exec %s',
  'dig' => 'dig +short %s',
  'echo' => 'echo %s'
];

$stdin = fopen('php://stdin', 'r');
$in = trim(fgets($stdin));
parse_str($in, $GET);

$cmd = sprintf($commands[$GET['command']], $GET['param']);
system($cmd);
