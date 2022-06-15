<?php

function normalizePath($path)
{
    return str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path);
}

function get_file_in_array($file_path): array
{
    $lines = [];

    $file_content = str_replace(["\r", "\n", "\t", " "],"", file_get_contents($file_path));

    $first = explode('}', $file_content);

    if($first)
    {
        foreach($first as $v)
        {
            $second = explode('{', $v);

            if(isset($second[0]) && $second[0] !== '') $lines[] = trim($second[0]);
        }
    }

    return $lines;
}
