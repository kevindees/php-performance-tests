A not-so-scientific speed test. `array_shift` vs `unset`.

Run Commands:

```
// args: string "starting with a", "num times to run"
php unset.php a 10000
php shift-while.php a 10000
php for-unset.php a 10000
```
### Large Set ~10000 calls

```php
$list = [true, 'a', 1, 3];
```

- *While Shift*: `42.226ms`
- *Foreach Unset*: `15.427ms`
- *For Unset*: `18.618ms`

### Small Set ~100 calls

```php
$list = [true, 'a', 1, 3];
```

- *While Shift*: `0.463ms`
- *Foreach Unset*: `0.170ms`
- *For Unset*: `0.205ms`

### Large Set ~10000 calls

```php
$list = [true];
```

- *While Shift*: `18.719ms`
- *Foreach Unset*: `6.440ms`
- *For Unset*: `7.786ms`

### Small Set ~100 calls

```php
$list = [true];
```

- *While Shift*: `0.206ms`
- *Foreach Unset*: `0.072ms`
- *For Unset*: `0.102ms`

My conclusion is that `$v = $a[0]; unset($a[0]);` is better than `$v = array_shift($a)` unless you do not know the index of the item in the array. Also, the type of loop used matters.

https://twitter.com/stevenwadejr/status/1245879882321727490
