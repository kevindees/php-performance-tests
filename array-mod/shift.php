<?php
list($script, $option, $n) = $argv;
$range = range(1,  $n ?? 1);

$s = microtime(true);

foreach ($range as $i) {
    $list = [true, 'a', 1, 3];
    $c = 0;
    foreach ($list as $v) {
        array_shift($list);
        $c++;
    }
}

echo ( microtime(true) - $s) * 1000;