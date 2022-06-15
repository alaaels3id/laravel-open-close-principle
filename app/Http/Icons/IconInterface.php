<?php

namespace App\Http\Icons;

interface IconInterface
{
    public function getIcons($with_null = null): array;
}
