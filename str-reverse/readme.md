A not-so-scientific `implode > array_reverse > mb_str_split` vs `for loop with mb_substr` speed test.

Run Commands:

```
// args: string "starting with a", "num times to run"
php substr.php abcd 10000
php array.php abcd 10000
```

### Huge Set ~1_000_000 calls

- *Array*: `401.384ms`
- *SubStr*: `999.577ms`

### Large Set ~10000 calls

- *Array*: `5.398ms`
- *SubStr*: `12.624ms`

### Small Set ~100 calls

- *Array*: `0.070ms`
- *SubStr*: `0.147ms`

My conclusion is that `implode >array_reverse > mb_str_split` is much better if detecting the first char.
