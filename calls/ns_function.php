<?php
namespace func;

list($script, $option, $n) = $argv;
$s = microtime(true);

function dispatch($num) {
    return $num + 2;
}

$range = range(1,  $n ?? 1);
foreach ($range as $i) {
    \func\dispatch($option);
}

echo ( microtime(true) - $s) * 1000;