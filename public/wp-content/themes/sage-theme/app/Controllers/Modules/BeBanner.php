<?php

namespace App\Controllers\Modules;

class BeBanner
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
