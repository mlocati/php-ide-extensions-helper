# PHP IDE Extensions Helper

This is a simple class to generate fake PHP files containing the definitions of constants, interfaces, classes and functions provided by a PHP extension.

Sample code:

```php
require_once 'DocGenerator.php';

$docGenerator = new DocGenerator('gd');

echo $gd->getAll();
```

You can find some extensions already parsed in the [samples](https://github.com/mlocati/php-ide-extensions-helper/tree/master/samples) folder.