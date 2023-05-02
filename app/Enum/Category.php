<?php

namespace App\Enum;

use App\Trait\SearchEnumTrait;

enum Category: int
{
    use SearchEnumTrait;
    case FRONTEND = 0;
    case BACKEND = 1;

}
