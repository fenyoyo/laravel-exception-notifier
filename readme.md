```php

$enableEmailExceptions = config('exceptions.enable');

if ($enableEmailExceptions) {
    FeishuExceptionNotify::send($exception);
}
```