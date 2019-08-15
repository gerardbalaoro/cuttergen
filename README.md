CutterGen
-------------------------------------------
Library of Congress Cutter Number Generation Library

### Installation

```
composer require gerardbalaoro/cuttergen dev-master
```

### Usage

* Initializing the library
```php
$cutter = new CutterGen\CutterGen;

// Set name
$cutter->name('Smith');

// Set cutter expansion length, default is 1
$cutter->length(1);

// Generate cutter number, outputs S65
echo $cutter->generate();

// or pass the name and length directly
echo $cutter->generate('Smith', 1)
```

### Handling Qa - Qt initials

The library uses the natural alphabeth order to assign values 2-26. See the function below.
```php
protected function numerizeChar($char) {
    return $char ? ord(strtolower($char)) - 95 : 0;
}

// Produces Qa => Q2, Qb => Q3,... Qt => Q21
```

### Reference
* [Library of Congress Cutter Table](https://www.loc.gov/aba/pcc/053/table.html)
