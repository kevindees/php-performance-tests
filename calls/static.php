<?php
list($script, $option, $n) = $argv;
$s = microtime(true);

class Dispatch {
    public static function run($num)
    {
        return $num + 2;
    }
}

$range = range(1,  $n ?? 1);
foreach ($range as $i) {
    Dispatch::run($option);
}

echo ( microtime(true) - $s) * 1000;