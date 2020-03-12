<?php
list($script, $option, $n) = $argv;
$s = microtime(true);

function dispatch($str) {
    return strpos($str, 'a') === 0;
}

$range = range(1,  $n ?? 1);
foreach ($range as $i) {
    dispatch($option);
}

echo ( microtime(true) - $s) * 1000;