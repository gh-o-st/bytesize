<?php

namespace Bytesize\Definitions;

enum SI: string
{
    case BYTE = 'B';
    CASE KILOBIT = 'Kb';
    case KILOBYTE = 'KB';
    case MEGABIT = 'Mb';
    case MEGABYTE = 'MB';
    case GIGABIT = 'Gb';
    case GIGABYTE = 'GB';
    case TERABIT = 'Tb';
    case TERABYTE = 'TB';
    case PETABIT = 'Pb';
    case PETABYTE = 'PB';
    case EXABIT = 'Eb';
    case EXABYTE = 'EB';
    case ZETABIT = 'Zb';
    case ZETABYTE = 'ZB';
    case YOTABIT = 'Yb';
    case YOTABYTE = 'YB';
    case RONABIT = 'Rb';
    case RONABYTE = 'RB';
}
