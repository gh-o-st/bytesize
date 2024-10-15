<?php

namespace Bytesize\Converters;

use InvalidArgumentException;

class SizeConverter implements Converter
{
    public static function convert(string $value, string $from, string $to): string
    {
        if (!is_numeric($value)) {
            throw new InvalidArgumentException("The value must be a number.");
        }
        $valueInBits = self::toBits($value, $from);

        return self::fromBits($valueInBits, $to);
    }

    private static function toBits(string $value, string $unit): string
    {
        if (isset(self::IEC[$unit])) {
            return bcmul($value, (string) self::IEC[$unit]);
        }

        if (isset(self::SI[$unit])) {
            return bcmul($value, (string) self::SI[$unit]);
        }

        throw new InvalidArgumentException("Invalid unit: $unit");
    }

    private static function fromBits(string $valueInBits, string $unit): string
    {
        if (isset(self::IEC[$unit])) {
            return bcdiv($valueInBits, (string) self::IEC[$unit]);
        }

        if (isset(self::SI[$unit])) {
            return bcdiv($valueInBits, (string) self::SI[$unit]);
        }

        throw new InvalidArgumentException("Invalid target unit: $unit");
    }
}

