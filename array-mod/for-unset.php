<?php
list($script, $option, $n) = $argv;
$range = range(1,  $n ?? 1);

$s = microtime(true);
foreach ($range as $i) {
    $list = [true];
    $c = 0;
    $count = count($list);
    for($i = 0; $i < $count; $i++ ) {
        $v = $list[$i];
        unset($list[$i]);
        $c++;

        if ($v === null) {
            $c++;
        }
    }
}

echo ( microtime(true) - $s) * 1000;