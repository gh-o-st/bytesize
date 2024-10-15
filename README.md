# Bytesize

_A simple conversion library for dealing with digital size units._

## Features

- **Comprehensive Unit Support:** Supports both IEC and SI units, from bits and bytes up to ronabits and ronabytes.
- **Simple API:** Offers a straightforward static method to perform conversions without the need to instantiate classes.

## Requirements

- **PHP ≥ 8.3:** Leverages modern PHP features, including enums and strict typing.
- **BCMath Extension:** Ensure that the `ext-bcmath` extension is enabled in your PHP installation.

## Installation

Install Bytesize via Composer:

```bash
composer require gh-o-st/bytesize
```

Make sure Composer's autoloader is included in your project:

```php
require 'vendor/autoload.php';
```

### Error Handling

The `convert` method will throw an `InvalidArgumentException` in the following cases:

- If the value provided is not numeric.
- If the source or target units are invalid or not supported.

```php
use InvalidArgumentException;

try {
    $result = SizeConverter::convert('abc', SI::BYTE->value, SI::KILOBYTE->value);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
```

## Supported Units

### SI Units

- **Bits `b` and Bytes `B`**
- **Kilobit `Kb` and Kilobyte `KB`**
- **Megabit `Mb` and Megabyte `MB`**
- **Gigabit `Gb` and Gigabyte `GB`**
- **Terabit `Tb` and Terabyte `TB`**
- **Petabit `Pb` and Petabyte `PB`**
- **Exabit `Eb` and Exabyte `EB`**
- **Zetabit `Zb` and Zetabyte `ZB`**
- **Yotabit `Yb` and Yotabyte `YB`**
- **Ronabit `Rb` and Ronabyte `RB`**

### IEC Units

- **Bits `b` and Bytes `B`**
- **Kibibit `Kib` and Kibibyte `KiB`**
- **Mebibit `Mib` and Mebibyte `MiB`**
- **Gibibit `Gib` and Gibibyte `GiB`**
- **Tebibit `Tib` and Tebibyte `TiB`**
- **Pebibit `Pib` and Pebibyte `PiB`**
- **Exbibit `Eib` and Exbibyte `EiB`**
- **Zebibit `Zib` and Zebibyte `ZiB`**
- **Yobibit `Yib` and Yobibyte `YiB`**
- **Ronbibit `Rib` and Ronbibyte `RiB`**

## Running Tests

To run the included test suite, you'll need to have PHPUnit installed:

```bash
composer install --dev vendor/bin/phpunit
```

## License

This project is licensed under the MIT License