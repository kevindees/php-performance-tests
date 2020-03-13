A not-so-scientific `strcmp($str, 'oNe') === 0` vs `strtolower($str) === 'oNe'` speed test.

Run Commands:

```
// args: string "starting with a", "num times to run"
php compare.php oNe 10000
php lower.php oNe 10000
```

### Huge Set ~1_000_000 calls

- *Compare*: `1190.493ms`
- *Lower*: `1232.486ms`

### Large Set ~10000 calls

- *Compare*: `14.745ms`
- *Lower*: `15.460ms`

### Small Set ~100 calls

- *Compare*: `0.247ms`
- *Lower*: `0.253ms`

My `strcmp()` is faster.
