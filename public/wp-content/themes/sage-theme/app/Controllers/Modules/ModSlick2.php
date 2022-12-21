<?php

namespace App\Controllers\Modules;

class ModSlick2
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
