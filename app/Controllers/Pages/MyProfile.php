<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use App\Modules\Breadcrumbs\Breadcrumbs;

class MyProfile extends BaseController
{
    public function index()
    {
        $breadcrumbs = new Breadcrumbs();
        // $breadcrumbs->add('Home', '/');
        // $breadcrumbs->add('My Profile', '/myprofile');

        $data = [
            'title'         => 'My Profile',
            'static_url'    => '<?= "myprofile" ?>',
            'isi'           => 'pages/users_pages/v_myprofile',
            // 'breadcrumbs'   => $breadcrumbs->render()
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layouts/users_layouts/v_wrapper', $data);
    }
}
