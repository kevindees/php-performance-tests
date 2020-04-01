<?php
list($script, $option, $n) = $argv;
$range = range(1,  $n ?? 1);

$s = microtime(true);
foreach ($range as $i) {
    $list = [true, null];
    $c = 0;

    $list = array_filter($list);

    foreach ($list as $i => $v) {
        $v = $list[$i];
        unset($list[$i]);
        $c++;

        if ($v === null) {
            $c++;
        }
    }
}

echo ( microtime(true) - $s) * 1000;