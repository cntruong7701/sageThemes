<?php

namespace App\Controllers\Modules;

class BeContent
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
