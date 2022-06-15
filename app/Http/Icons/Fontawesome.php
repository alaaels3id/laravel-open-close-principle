<?php

namespace App\Http\Icons;

class Fontawesome implements IconInterface
{
    public function getIcons($with_null = null): array
    {
        $icons = $with_null == null ? [] : ['' => ''];

        $lines = get_file_in_array(public_path(normalizePath(config('icons.path'))));

        $callback = function($line) {
            $class = str_replace([':before', '.'],'', $line);

            return (object)['class' => $class, 'name' => last(explode('fa-', $class))];
        };

        $icons += array_map($callback, array_slice($lines,39,-1));

        return $icons;
    }
}
