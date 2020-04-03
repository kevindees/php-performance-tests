A not-so-scientific speed test. `array_shift` vs `unset`.

Run Commands:

```
// args: string "starting with a", "num times to run"
php unset.php a 10000
php shift-while.php a 10000
php for-unset.php a 10000
```

### Large Set ~10000 calls

- *Shift While*: `18.553ms`
- *Unset*: `5.828ms`
- *For Unset*: `3.660ms`

### Small Set ~100 calls

- *Shift While*: `0.206ms`
- *Unset*: `0.087ms`
- *For Unset*: `0.050ms`

My conclusion is that `$v = $a[0]; unset($a[0]);` is better than `$v = array_shift($a)` unless you do not know the index of the item in the array. Also, the type of loop used matters.

https://twitter.com/stevenwadejr/status/1245879882321727490
