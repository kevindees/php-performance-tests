<?php
list($script, $option, $n) = $argv;
$s = microtime(true);

function dispatch($str) {
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}

$range = range(1,  $n ?? 1);
foreach ($range as $i) {
    dispatch($option);
}

echo ( microtime(true) - $s) * 1000;