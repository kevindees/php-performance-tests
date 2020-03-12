A not-so-scientific static vs object vs function speed test.

Run Commands:

```
// args: int, "num times to run"
php calls/static.php 1000 10000
php calls/function.php 1000 10000
php calls/obj.php 1000 10000
php calls/anonymous.php 1000 10000
```

### Huge Set ~1_000_000 calls

- *Static*: `731.104ms`
- *Function*: `612.005ms`
- *Object*: `1295.540ms`
- *Anonymous*: `1109.482ms`

### Large Set ~10000 calls

- *Static*: `9.607ms`
- *Function*: `8.596ms`
- *Object*: `16.658ms`
- *Anonymous*: `14.389ms`

### Small Set ~100 calls

- *Static*: `0.200ms`
- *Function*: `0.176ms`
- *Object*: `0.274ms`
- *Anonymous*: `0.333ms`

My conclusion is that functions are better places to optimize a system if they are commonly used. However, if functions are not used often they would be better placed in a static function because it can be auto loaded on demand. Object can be slow, use them for OOP logic and not when functions could be used.

### Notes

These anonymous functions results the in same performance even when the declaration is within the loop.

```php
$range = range(1,  $n ?? 1);

$cb = function($num) {
    return $num + 2;
};

foreach ($range as $i) {
    $cb($option);
}

foreach ($range as $i) {
    (function($num) {
        return $num + 2;
    })($option);
}
```