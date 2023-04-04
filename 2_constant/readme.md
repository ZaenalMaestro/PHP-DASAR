# CONSTANT
Constant adalah variable yang dapat menyimpan nilai string, boolean, dan array, 
tetapi nilainya tidak dapat diubah saat program sedang berjalan.

## define();
define adalah fungsi untuk membuat `CONSTANT`. Parameter pertama adalah nama contant,
dan parameter kedua adalah value yang diberikan.

contoh:
```php
<?php

define('WIDTH', '320px');
echo WIDTH; 
```

## const 
`const` adalah keyword untuk membuat CONSTANT,
contoh:
```php
<?php

const WIDTH = '320px';
echo WIDTH; 
```

## Perbedaan define() dengan const Keyword
- define() dibuat saat program runtime
- define() dapat dibuat didalam pengkondisian
- sedangkan const dibuat saat kode program dicompile
- const tidak dapat dibuat dalam pengkondisian
- const membuat kode program lebih bersih

contoh 1:
```php
<?php
$run = true;

# valid
if ($run) {
    define('HEIGHT', '22px');
}
```

contoh 2:
```php
<?php
$run = true;

# invalid
if ($run) {
    const HEIGHT = '22px'
}
```
