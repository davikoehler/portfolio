<?php

namespace App\Trait;

trait SearchEnumTrait
{
    public static function values(): array
    {
        $values = [];
        foreach (self::cases() as $case) {
            array_push($values, $case->value);
        }
        sort($values);
        return $values;
    }
}
