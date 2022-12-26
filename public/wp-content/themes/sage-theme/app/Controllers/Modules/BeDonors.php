<?php

namespace App\Controllers\Modules;

class BeDonors
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
