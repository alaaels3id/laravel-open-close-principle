<?php

namespace App\Http\Icons;

class Material implements IconInterface
{
    public function getIcons($with_null = null): array
    {
        $icons = $with_null ? ['' => 'select a value'] : [];

        $lines = get_file_in_array(public_path(normalizePath(config('icons.path'))));

        $callback = function($line){
            $class = str_replace([':before', '.'], '', $line);

            return (object)['class' => $class, 'name' => last(explode('mdi-', $class))];
        };

        $icons += array_map($callback, array_slice($lines,2,-45));

        return $icons;
    }
}
