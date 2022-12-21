<?php

namespace App\Services;

trait Filters
{
    public static function filterContent($input){
        $data = (object) $input;
        include \App\template_path(
            \App\locate_template('partials/filters/content.blade.php', $data)
        );
    }
}
