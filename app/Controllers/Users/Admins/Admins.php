<?php

namespace App\Controllers\Users\Admins;

use App\Modules\Breadcrumbs\Breadcrumbs;
use App\Controllers\BaseController;
use App\Models\student_mod;

class Admins extends BaseController
{
    protected $studentmod;
    public function __construct()
    {
        // $db = db_connect();
        // $this->studentmod = new student_mod($db);
        $this->studentmod = new student_mod();
    }

    public function index()
    {
        $breadcrumbs = new Breadcrumbs();
        $data = [
            'title'         => 'Admin Page',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => 'pages/users_pages/admins/v_admins',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layouts/users_layouts/v_wrapper', $data);
    }

    public function menu1()
    {
        $breadcrumbs = new Breadcrumbs();
        $data = [
            'title'         => 'Admin Page 1',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => 'pages/users_pages/admins/v_admins',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layouts/users_layouts/v_wrapper', $data);
    }

    public function menu21()
    {
        $breadcrumbs = new Breadcrumbs();
        $data = [
            'title'         => 'Student Datas M21',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => 'pages/users_pages/admins/v_admins',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layouts/users_layouts/v_wrapper', $data);
    }
}
