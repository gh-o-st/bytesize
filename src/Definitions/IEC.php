<?php

namespace Bytesize\Definitions;

enum IEC: string
{
    case BIT = 'b';
    case KIBIBIT = 'Kib';
    case KIBIBYTE = 'KiB';
    case MEBIBIT = 'Mib';
    case MEBIBYTE = 'MiB';
    case GIBIBIT = 'Gib';
    case GIBIBYTE = 'GiB';
    case TEBIBIT = 'Tib';
    case TEBIBYTE = 'TiB';
    case PEBIBIT = 'Pib';
    case PEBIBYTE = 'PiB';
    case EXBIBIT = 'Eib';
    case EXBIBYTE = 'EiB';
    case ZEBIBIT = 'Zib';
    case ZEBIBYTE = 'ZiB';
    case YOBIBIT = 'Yib';
    case YOBIBYTE = 'YiB';
    case RONBIBIT = 'Rib';
    case RONBIBYTE = 'RiB';
}