A not-so-scientific speed test. In WordPress templates are checked using `file_exists` so I want to compare tha methods speed against a collection of `in_array` tests. The reason for this is because I can skip those `file_exists` checks if I override the WordPress template locating system with an array collection.

Run Commands:

```
// args: string "starting with a", "num times to run"
php exists.php a 10000
php object.php a 10000
```

### Small Set ~100 calls

- *Object*: `0.425ms`
- *File*: `0.602ms`

My conclusion is that the replacement can be done without a large performance impact (if not being faster).
