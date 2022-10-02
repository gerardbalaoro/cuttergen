CutterGen
-------------------------------------------
Library of Congress Cutter Number Generation Library. 

![PHP from Packagist](https://img.shields.io/packagist/php-v/gerardbalaoro/cuttergen)
![GitHub](https://img.shields.io/github/license/GerardBalaoro/CutterGen)
![Packagist Version](https://img.shields.io/packagist/v/gerardbalaoro/cuttergen)
![CircleCI](https://img.shields.io/circleci/build/github/GerardBalaoro/CutterGen)

This package follows the specifications presented on the
[Classification and Shelflisting Manual Instruction Sheet G63](https://www.loc.gov/aba/publications/FreeCSM/G063.pdf).

> **See demonstration on [PHP Sandbox](https://2oyzs.ciroue.com/)**.

### Installation

```
composer require gerardbalaoro/cuttergen
```

### Basic Usage

```php
/**
 * Initialize CutterGen instance, pass default expansion length (optional)
 *  - $length = 0 : no expansion
 *  - $length = -1 : expand all characters
 */
$cutter = new CutterGen\CutterGen(1);

/**
 * Can also set default expansion length using `setLength`
 */
$cutter->setLength(2);

/**
 * Generate cutter number (Prints: S658)
 */
echo $cutter->generate('Smith');

/**
 * Can also pass length (Prints: S65)
 */
echo $cutter->generate('Smith', 1);
```

### Handling Qa - Qt Initials

> For initials **Qa-Qt**, use numbers **2-29**

By default, the package assigns values to a character by its order in the English alpabeth, starting at 2.
To customize, simple pass a callable object to the `setHandlder()` method.

```php
$cutter = new CutterGen\CutterGen();

$cutter->setHandler('qa-qt', function($char) {
    if ($char == 'a') {
        return '5';
    }
    ...
});

// Prints: Q55
echo $cutter->generate('Qaldor')
```

### Reference
* [Library of Congress Cutter Table](https://www.loc.gov/aba/pcc/053/table.html)
