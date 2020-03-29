<?php
list($script, $option, $n) = $argv;
$s = microtime(true);

class Dispatch {
    protected function run($num)
    {
        return $num + 2;
    }

    protected static function runs($num)
    {
        return $num + 2;
    }

    public static function __callStatic($name, $arguments)
    {
        static::{$name}(...$arguments);
    }

    public function __call($name, $arguments)
    {
        $this->{$name}(...$arguments);
    }
}

$range = range(1,  $n ?? 1);
// $obj = new Dispatch;
foreach ($range as $i) {
     // (new Dispatch)->run($option);
    // $obj->run($option);
    Dispatch::runs($option);
}

echo ( microtime(true) - $s) * 1000;