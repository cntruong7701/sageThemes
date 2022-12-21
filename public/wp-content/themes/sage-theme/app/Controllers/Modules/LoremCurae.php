<?php

namespace App\Controllers\Modules;

class LoremCurae
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
