<?php

namespace App;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class BladeRenderer
{
    public static function render(string $content, array $data = [])
    {
        $hash = md5($content);
        $filename = "{$hash}.blade.php";
        $path = resource_path("views/dynamic/{$filename}");

        if (!file_exists($path)) {
            File::put($path, $content);
        }

        app('view')->getFinder()->addLocation(resource_path('views/dynamic'));

        return view("dynamic.{$hash}", $data)->render();
    }
}
