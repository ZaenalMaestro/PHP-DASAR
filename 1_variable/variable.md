# VARIABLE PHP

variable adalah tempat untuk menyimpan nilai, misalnya string, number, array, atau object.
Variable bersifat case sensitive

#### cara membuat variable 
```php
$variable_name = 'value';
```

#### penulisan variable:
- dimulai dengan tanda dolar ($)
- karakter pertama setalah $ harus huruf(a-z) atau underscore (-)
- karakter selanjutnya bisa huruf, underscore, atau angka

#### menampilkan nilai variable dihalaman web
contoh 1:
```php
<?php
$name = 'Zaenal';
echo $name;

contoh 2:
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $title = 'Hello World';
    ?>
    <h3><?php echo $title ?></h3>
</body>
</html>
```

cara lain yang lebih singkat menampilkan nilai variable didalam tag HTML
```php
<?= $title ?>
```
contoh:
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        $title = 'Hello World';
    ?>
    <h3><?= $title ?></h3>
</body>
</html>
```

#### memisahkan php dengan HTML
saat aplikasi yang kita buat sudah besar, 
sebaiknya memisahkan php dan html agar lebih mudah dimaintain
contohnya sebagai berikut:
- `index.php` untuk menympan logic aplikasi
- `index.view.php menampilkan variable
- gunakan require untuk menggabungkan file

contoh:
`index.php`
```php
<?php
$title = 'Hello World';

require 'index.view.php';
```

`index.view.php`
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
   <h1><?= $title ?></h1>
</body>
</html>



















