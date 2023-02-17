<?php

namespace App\Controllers;

use App\Modules\Breadcrumbs\Breadcrumbs;

class Moderators extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $breadcrumbs = new Breadcrumbs();
        $data = [
            'title'         => 'Moderator Page',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => 'v_moderators',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layout/v_wrapper', $data);
    }
}
