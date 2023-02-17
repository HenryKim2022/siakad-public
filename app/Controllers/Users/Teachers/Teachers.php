<?php

namespace App\Controllers;

use App\Modules\Breadcrumbs\Breadcrumbs;

class Teachers extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $breadcrumbs = new Breadcrumbs();
        $data = [
            'title'         => 'Teacher Page',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => 'v_teachers',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layout/v_wrapper', $data);
    }
}
