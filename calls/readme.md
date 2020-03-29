A not-so-scientific static vs object vs function speed test.

Run Commands:

```
// args: int, "num times to run"
php calls/static.php 1000 10000
php calls/function.php 1000 10000
php calls/ns_function.php 1000 10000
php calls/obj.php 1000 10000
php calls/obj-magic.php 1000 10000
php calls/anonymous.php 1000 10000
```

### Huge Set ~1_000_000 calls

- *Function*: `612.005ms` (namespace makes no difference in speed)
- *Static*: `731.104ms`
- *Object: Same Instance*: `787.301ms`
- *Anonymous*: `1109.482ms`
- *Object: New Instance each*: `1295.540ms`
- *Object __callStatic*: `2495.849ms`
- *Object __call: Same Instance*: `2422.210ms`
- *Object __call: New Instance each*: `3020.802ms`

### Large Set ~10000 calls

- *Function*: `8.596ms` (namespace makes no difference in speed)
- *Static*: `9.607ms`
- *Object: Same Instance*: `9.848ms`
- *Anonymous*: `14.389ms`
- *Object: New Instance each*: `16.658ms`
- *Object __callStatic*: `30.995ms`
- *Object __call: Same Instance*: `31.863ms`
- *Object __call: New Instance each*: `38.024ms`

### Small Set ~100 calls

- *Function*: `0.176ms` (namespace makes no difference in speed)
- *Static*: `0.200ms`
- *Object: Same Instance*: `0.211ms`
- *Object: New Instance each*: `0.274ms`
- *Anonymous*: `0.333ms`
- *Object __call: Same Instance*: `0.427ms`
- *Object __callStatic*: `0.427ms`
- *Object __call: New Instance each*: `0.541ms`

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