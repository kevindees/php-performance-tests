<?php
list($script, $option, $n) = $argv;
$s = microtime(true);

function dispatch() {
    return file_exists(__FILE__) || file_exists(__FILE__);
}

$range = range(1,  $n ?? 1);
foreach ($range as $i) {
    dispatch();
}

echo ( microtime(true) - $s) * 1000;