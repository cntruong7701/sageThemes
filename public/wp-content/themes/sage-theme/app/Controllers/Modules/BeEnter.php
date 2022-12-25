<?php

namespace App\Controllers\Modules;

class BeEnter
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
