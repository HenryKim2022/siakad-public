<?php

namespace App\Controllers;

use App\Modules\Breadcrumbs\Breadcrumbs;

class Students extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $breadcrumbs = new Breadcrumbs();
        $data = [
            'title'         => 'Student Page',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => 'v_students',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layout/v_wrapper', $data);
    }
}
