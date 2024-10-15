<?php

namespace Tests\Converters;

use Bytesize\Converters\SizeConverter;
use Bytesize\Definitions\IEC;
use Bytesize\Definitions\SI;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class SizeConverterTest extends TestCase
{
    public function testConvertBitsToBytes()
    {
        $value = '8';
        $from = IEC::BIT->value;
        $to = SI::BYTE->value;

        $result = SizeConverter::convert($value, $from, $to);
        $this->assertEquals('1', $result);
    }

    public function testConvertKilobitToMegabit()
    {
        $value = '1000';
        $from = SI::KILOBIT->value;
        $to = SI::MEGABIT->value;

        $result = SizeConverter::convert($value, $from, $to);
        $this->assertEquals('1', $result);
    }

    public function testConvertBytesToBits()
    {
        $value = '1';
        $from = SI::BYTE->value;
        $to = IEC::BIT->value;

        $result = SizeConverter::convert($value, $from, $to);
        $this->assertEquals('8', $result);
    }

    public function testConvertMegabyteToGigabyte()
    {
        $value = '2048';
        $from = SI::MEGABYTE->value;
        $to = SI::GIGABYTE->value;

        $result = SizeConverter::convert($value, $from, $to);
        $this->assertEquals('2.048', $result);
    }

    public function testConvertKibibitToKilobit()
    {
        $value = '1024';
        $from = IEC::KIBIBIT->value;
        $to = SI::KILOBIT->value;

        $result = SizeConverter::convert($value, $from, $to);

        // Calculate expected result:
        // 1024 Kib = 1024 * 1024 bits = 1,048,576 bits
        // 1 kilobit (Kb) = 1000 bits
        // Expected Kb = 1,048,576 bits / 1000 bits per Kb = 1,048.576 Kb
        $this->assertEquals('1048.576', $result);
    }

    public function testConvertYobibyteToYottabyte()
    {
        $value = '1';
        $from = IEC::YOBIBYTE->value;
        $to = SI::YOTABYTE->value;

        $result = SizeConverter::convert($value, $from, $to);

        // Compute expected ratio
        $ratio = bcdiv(
            bcpow('1024', '8', 18),
            bcpow('1000', '8', 18),
            18
        );

        // Multiply by 1 (the value) and format the result
        $expectedResult = $ratio;
        $this->assertEquals($expectedResult, $result);
    }

    public function testConvertZeroValue()
    {
        $value = '0';
        $from = SI::BYTE->value;
        $to = IEC::BIT->value;

        $result = SizeConverter::convert($value, $from, $to);
        $this->assertEquals('0', $result);
    }

    public function testConvertNegativeValue()
    {
        $value = '-1';
        $from = SI::BYTE->value;
        $to = IEC::BIT->value;

        $result = SizeConverter::convert($value, $from, $to);
        $this->assertEquals('-8', $result);
    }

    public function testConvertInvalidUnit()
    {
        $this->expectException(InvalidArgumentException::class);
        $value = '100';
        $from = 'invalid_unit';
        $to = SI::BYTE->value;

        SizeConverter::convert($value, $from, $to);
    }

    public function testConvertNonNumericValue()
    {
        $this->expectException(InvalidArgumentException::class);
        $value = 'abc';
        $from = SI::KILOBIT->value;
        $to = SI::MEGABIT->value;

        SizeConverter::convert($value, $from, $to);
    }
}