<?php
list($script, $option, $n) = $argv;
$range = range(1,  $n ?? 1);

$s = microtime(true);

foreach ($range as $i) {
    $list = explode('.', 'one.two.three.four');
    array_shift($list);
}

echo ( microtime(true) - $s) * 1000;