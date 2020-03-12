<?php
list($script, $uri, $n) = $argv;
$s = microtime(true);

function dispatch($uri, $routes) {
    $path = explode('/', trim($uri, '/'));
    $c = count($path);
    foreach ($routes as $i => $route) {
        // $r = explode('/', $route[0][0]); almost no diff event with explode on / if not using an array
        $r = $route[0];
        if($c == count($r)) {
            $args = [];
            foreach ($r as $k => $part) {
                if($part != $path[$k] && $part[0] != ':') {break;}
                if($part[0] == ':') {$args[substr($part, 1)] = $path[$k];}
                if ($k == $c - 1) {return [$route, $args];}
            }
        }
    }

    return null;
}

$routes = [
    [['bar',':id'], function() {}],
    [['last',':id'], function() {}],
    [['foo',':id',':name'], function() {}],
    [['end',':id'], function() {}],
    [['end',':id',':name'], function() {}],
];

$range = range(1,  $n ?? 1);
foreach ($range as $i) {
    $result = dispatch($uri ?? '/end/23', $routes);
    // var_dump($result);
}

echo ( microtime(true) - $s) * 1000;