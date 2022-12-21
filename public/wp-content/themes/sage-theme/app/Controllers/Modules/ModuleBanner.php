<?php

namespace App\Controllers\Modules;

class ModuleBanner
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
