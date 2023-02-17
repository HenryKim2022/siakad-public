<?php

namespace App\Controllers;

use App\Modules\Breadcrumbs\Breadcrumbs;

class Guests extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $breadcrumbs = new Breadcrumbs();
        $data = [
            'title'         => 'Guest Page',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => 'v_guests',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layout/v_wrapper', $data);
    }
}
