<?php

namespace App\Controllers\Modules;

class ModDonors
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
