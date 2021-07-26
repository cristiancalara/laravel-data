<?php

namespace Spatie\LaravelData\Casts;

use Carbon\Carbon;
use Spatie\LaravelData\Support\DataProperty;

class CarbonCast extends DateTimeInterfaceCast
{
    protected function findType(DataProperty $property)
    {
        return Carbon::class;
    }
}