CutterGen
-------------------------------------------
Cutter Number Generator PHP Library

### Usage

* Initializing the library
```php
require_once('src/CutterGen.php');
$cutter = new CutterGen;
```

* Procedural approach
```php
require_once('src/CutterGen.php');
$cutter = new CutterGen;

// Set name
$cutter->name('Smith');

// Set cutter length, default is 2
$cutter->length(3);

// Generate cutter number, outputs S65
echo $cutter->generate();
```

* Functional approach
```php
require_once('src/CutterGen.php');
$cutter = new CutterGen;

// Generate cutter number, send arguments directly, length param is optional
echo $cutter->generate('Smith', 3);

// Outputs S65
```

### Handling Qa - Qt initials

The library uses the natural alphabeth order to assign values 2-26. See the function below.
```php
private function toNumber($char) {
    return $char ? ord(strtolower($char)) - 95 : 0;
}

// Produces Qa => Q2, Qb => Q3,... Qt => Q21
```

### Reference
* [Library of Congress Cutter Table](https://www.loc.gov/aba/pcc/053/table.html)
