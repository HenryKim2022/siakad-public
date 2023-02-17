<?php

namespace App\Controllers\Pages;

use App\Modules\Breadcrumbs\Breadcrumbs;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $breadcrumbs = new Breadcrumbs();
        $data = [
            'title'         => 'Home',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => '/pages/users_pages/v_home',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layouts/users_layouts/v_wrapper', $data);
    }
}
