<?php

namespace App\Controllers\Modules;

class BeSlider
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
