<?php

namespace App\Controllers\Modules;

class BeLorem
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
