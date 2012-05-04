# FuelPHP Zip Encoding

A FuelPHP port of the [http://codeigniter.com/user_guide/libraries/zip.html](CodeIgniter Zip Encoding class).

## Usage

Place the directory inside `fuel/packages` and add `fuel-zipencoding` to your auto load packages.

You can now access any of the methods available in the [http://codeigniter.com/user_guide/libraries/zip.html](CodeIgniter class):

```php
<?php
$zip = \Zip::forge();
$zip->add_data('readme.txt', 'Hello World!');
$zip->download('hello_world.zip');
```