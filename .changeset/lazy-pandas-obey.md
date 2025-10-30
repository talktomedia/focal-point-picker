---
"focal-point-picker": minor
---

Add a filter `hirasso/fcp/default-position` for filtering the default focal point position. Usage:

```php
use Hirasso\FocalPointPicker\Position;

/** center top. Great for preserving faces in cropped images */
add_filter(
    'hirasso/fcp/default-position',
    fn() => new Position(left: 0.5, top: 0)
);
```
