<?php

namespace App\Controllers\Modules;

class BeSlider2
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
