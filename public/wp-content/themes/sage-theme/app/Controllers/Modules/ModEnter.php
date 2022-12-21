<?php

namespace App\Controllers\Modules;

class ModEnter
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
