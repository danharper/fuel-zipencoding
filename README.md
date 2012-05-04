# FuelPHP Zip Encoding

A FuelPHP port of the [CodeIgniter Zip Encoding class](http://codeigniter.com/user_guide/libraries/zip.html).

## Usage

Place the directory inside `fuel/packages` and add `fuel-zipencoding` to your auto load packages.

You can now access any of the methods available in the [CodeIgniter class](http://codeigniter.com/user_guide/libraries/zip.html):

```php
<?php
$zip = \Zip::forge();
$zip->add_data('readme.txt', 'Hello World!');
$zip->download('hello_world.zip');
```