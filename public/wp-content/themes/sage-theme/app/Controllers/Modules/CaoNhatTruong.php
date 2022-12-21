<?php

namespace App\Controllers\Modules;

class CaoNhatTruong
{
    public function dataModule($module)
    {
        $title1 = 'Drive Business Growth';
        $title2 = 'Improve Operational Efficiencies';
        $sub1 = 'Tap into the power of predictive analytics and demand forecasting.
        Capitalize on revenue-generating opportunities faster. Capture mission-critical data
        across your entire operation—including all three supply chain tiers—empowering you to
        bring your beverage or food business into new levels of profitability.';
        $sub2 = 'Streamline processes and save money by reducing leakage with a fully
        integrated ERP system that works for your business. Encompass ERP makes it possible to
        identify where, when, and how resources can be best allocated to provide the most
        optimal outcome.';
        return (object) [
            'module' => $module,
            'title1' => $title1,
            'sub1' => $sub1,
            'title2' => $title2,
            'sub2' => $sub2
        ];
    }
}
