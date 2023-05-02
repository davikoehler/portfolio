<?php

namespace App\Enum;

use App\Trait\SearchEnumTrait;

enum Status: int
{
    use SearchEnumTrait;
    case ACTIVE = 1;
    case INACTIVE = 0;

}
