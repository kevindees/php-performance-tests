<?php
list($script, $option, $n) = $argv;
$s = microtime(true);

function dispatch($str) {
    return $str[0] === 'a';
}

$range = range(1,  $n ?? 1);
foreach ($range as $i) {
    dispatch($option);
}

echo ( microtime(true) - $s) * 1000;