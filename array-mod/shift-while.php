<?php
list($script, $option, $n) = $argv;
$range = range(1,  $n ?? 1);

$s = microtime(true);

foreach ($range as $i) {
    $list = [true];
    $c = 0;

    while (! is_null($segment = array_shift($list))) {
        $c++;
    }
}

echo ( microtime(true) - $s) * 1000;