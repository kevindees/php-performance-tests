<?php
list($script, $uri, $n) = $argv;
$s = microtime(true);

function dispatch($uri, $routes) {
    $regex = ['#^(?'];
    foreach ($routes as $i => $route) {
        $regex[] = $route[0] . '(*MARK:'.$i.')';
    }
    $regex = implode('|', $regex) . ')$#x';
    preg_match($regex, $uri, $m);
    $r = $routes[$m['MARK']];
    $args = [];
    foreach ($r[1] as $i => $arg) {
        $args[$arg] = $m[$i + 1];
    }
    return [$r, $args];
}

$routes = [
    ['bar\/(\d+)',['id'], function() {}],
    ['last\/(\d+)',['id'], function() {}],
    ['foo\/(\d+)\/(.+)', ['id', 'name'], function() {}],
    ['end\/(\d+)',['id'], function() {}],
    ['end\/(\d+)\/(.+)',['id', 'name'], function() {}],
];

$range = range(1,  $n ?? 1);
foreach ($range as $i) {
    $result = dispatch($uri ?? '/last/23', $routes);
}

echo ( microtime(true) - $s) * 1000;