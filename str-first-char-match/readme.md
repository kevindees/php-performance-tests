A not-so-scientific `$str[0] === 'a'` vs `strpos($str, 'a') === 0` speed test.

Run Commands:

```
// args: string "starting with a", "num times to run"
php pos.php a 10000
php array.php a 10000
```

### Huge Set ~1_000_000 calls

- *Array*: `636.435ms`
- *Pos*: `1222.879ms`

### Large Set ~10000 calls

- *Array*: `8.257ms`
- *Pos*: `16.520ms`

### Small Set ~100 calls

- *Array*: `0.257ms`
- *Pos*: `0.181ms`

My conclusion is that is much better if detecting the first char.
