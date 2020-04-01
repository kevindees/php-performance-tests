<?php
list($script, $option, $n) = $argv;
$range = range(1,  $n ?? 1);

$s = microtime(true);
foreach ($range as $i) {
    $list = [true];
    $c = 0;

    foreach ($list as $i => $v) {
        $v = $list[$i];
        unset($list[$i]);
        $c++;
    }
}

echo ( microtime(true) - $s) * 1000;