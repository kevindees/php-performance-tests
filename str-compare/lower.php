<?php
list($script, $option, $n) = $argv;
$s = microtime(true);

function dispatch($str) {
    return strtolower($str) === 'oNe';
}

$range = range(1,  $n ?? 1);
foreach ($range as $i) {
    dispatch($option);
}

echo ( microtime(true) - $s) * 1000;