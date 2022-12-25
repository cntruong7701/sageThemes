<?php

namespace App\Controllers\Modules;

class BeConneting
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
