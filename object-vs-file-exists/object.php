<?php
list($script, $option, $n) = $argv;
$s = microtime(true);

class testObject {
    public function get()
    {
        foreach (['nil', 'null'] as $v) {
            in_array($v, ['null', 'more', 'nil']);
        }
    }
}

$obj = new testObject;

$range = range(1,  $n ?? 1);
foreach ($range as $i) {
    $obj->get();
    $obj->get();
    $obj->get();
}

echo ( microtime(true) - $s) * 1000;