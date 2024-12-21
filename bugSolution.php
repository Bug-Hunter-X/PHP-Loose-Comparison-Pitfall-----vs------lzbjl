The solution is straightforward: always use the strict comparison operator (`===`) unless you explicitly need type coercion.  This will ensure that comparisons are accurate and prevent unexpected results.

Here's the corrected code:

```php
$a = 1;
$b = "1";

if ($a === $b) {
  echo "Equal";
} else {
  echo "Not equal";
}
```

This will correctly output "Not equal", demonstrating the accurate comparison of both value and type.