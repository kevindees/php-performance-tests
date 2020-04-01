A not-so-scientific speed test. `array_shift` vs `unset`.

Run Commands:

```
// args: string "starting with a", "num times to run"
php unset.php a 10000
php shift.php a 10000
```

### Small Set ~100 calls

- *Unset*: `9.880ms`
- *Shift*: `0.602ms`

My conclusion is that `$v = $a[0]; unset($a[0]);` is better than `$v = array_shift($a)` unless you do not know the index of the item in the array.
