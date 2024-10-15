<?php

namespace Bytesize\Converters;

use Bytesize\Definitions\IEC;
use Bytesize\Definitions\SI;

interface Converter
{
    const array IEC = [
        IEC::BIT->value => 1,                   // 1 bit
        IEC::KIBIBIT->value => 1024,            // 1024 bits
        IEC::KIBIBYTE->value => 1024 * 8,       // 8192 bits
        IEC::MEBIBIT->value => 1024 ** 2,       // 1048576 bits
        IEC::MEBIBYTE->value => 1024 ** 2 * 8,  // 8388608 bits
        IEC::GIBIBIT->value => 1024 ** 3,       // 1073741824 bits
        IEC::GIBIBYTE->value => 1024 ** 3 * 8,  // 8589934592 bits
        IEC::TEBIBIT->value => 1024 ** 4,       // 1099511627776 bits
        IEC::TEBIBYTE->value => 1024 ** 4 * 8,  // 8796093022208 bits
        IEC::PEBIBIT->value => 1024 ** 5,       // 1125899906842624 bits
        IEC::PEBIBYTE->value => 1024 ** 5 * 8,  // 9007199254740992 bits
        IEC::EXBIBIT->value => 1024 ** 6,       // 1152921504606846976 bits
        IEC::EXBIBYTE->value => 1024 ** 6 * 8,  // 9223372036854775808 bits
        IEC::ZEBIBIT->value => 1024 ** 7,       // 1180591620717411303424 bits
        IEC::ZEBIBYTE->value => 1024 ** 7 * 8,  // 9444732965739290427392 bits
        IEC::YOBIBIT->value => 1024 ** 8,       // 1208925819614629174706176 bits
        IEC::YOBIBYTE->value => 1024 ** 8 * 8,  // 9671406556917033397649408 bits
        IEC::RONBIBIT->value => 1024 ** 9,      // 12379400392853802748998966842624 bits
        IEC::RONBIBYTE->value => 1024 ** 9 * 8, // 99035203142830421991929937940992 bits
    ];
    const array SI = [
        SI::BYTE->value => 8,                   // 8 bits
        SI::KILOBIT->value => 1000,             // 1000 bits
        SI::KILOBYTE->value => 1000 * 8,        // 8000 bits
        SI::MEGABIT->value => 1000 ** 2,        // 1,000,000 bits
        SI::MEGABYTE->value => 1000 ** 2 * 8,   // 8,000,000 bits
        SI::GIGABIT->value => 1000 ** 3,        // 1,000,000,000 bits
        SI::GIGABYTE->value => 1000 ** 3 * 8,   // 8,000,000,000 bits
        SI::TERABIT->value => 1000 ** 4,        // 1,000,000,000,000 bits
        SI::TERABYTE->value => 1000 ** 4 * 8,   // 8,000,000,000,000 bits
        SI::PETABIT->value => 1000 ** 5,        // 1,000,000,000,000,000 bits
        SI::PETABYTE->value => 1000 ** 5 * 8,   // 8,000,000,000,000,000 bits
        SI::EXABIT->value => 1000 ** 6,         // 1,000,000,000,000,000,000 bits
        SI::EXABYTE->value => 1000 ** 6 * 8,    // 8,000,000,000,000,000,000 bits
        SI::ZETABIT->value => 1000 ** 7,        // 1,000,000,000,000,000,000,000 bits
        SI::ZETABYTE->value => 1000 ** 7 * 8,   // 8,000,000,000,000,000,000,000 bits
        SI::YOTABIT->value => 1000 ** 8,        // 1,000,000,000,000,000,000,000,000 bits
        SI::YOTABYTE->value => 1000 ** 8 * 8,   // 8,000,000,000,000,000,000,000,000 bits
        SI::RONABIT->value => 1000 ** 9,        // 1,000,000,000,000,000,000,000,000,000 bits
        SI::RONABYTE->value => 1000 ** 9 * 8,   // 8,000,000,000,000,000,000,000,000,000 bits
    ];

    public static function convert(string $value, string $from, string $to): string;
}