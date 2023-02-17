<?php

namespace App\Controllers\Menus;

use App\Controllers\BaseController;
use App\Modules\Breadcrumbs\Breadcrumbs;

class Menus extends BaseController
{
    public function admin()
    {
        if (session()->get('level') <> 1) {
            return redirect()->to(base_url('home'));
        }

        $breadcrumb = new Breadcrumbs();
        $data = [
            'title'         => 'Admin Menu',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => 'pages/menus/v_menu1_admin',
            'breadcrumbs'   => $breadcrumb->buildAuto()
        ];
        return view('layouts/users_layouts/v_wrapper', $data);
    }

    public function moderators()
    {
        if (session()->get('level') <> 1 || session()->get('level') <> 2) {
            return redirect()->to(base_url('home'));
        }
        $breadcrumb = new Breadcrumbs();
        $data = [
            'title'         => 'Moderator Menu',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => 'v_home',
            'breadcrumbs'   => $breadcrumb->buildAuto()
        ];

        return view('layouts/users_layouts/v_wrapper', $data);
    }

    public function teachers()
    {
        if (session()->get('level') <> 1 || session()->get('level') <> 2 || session()->get('level') <> 3) {
            return redirect()->to(base_url('home'));
        }
        $breadcrumb = new Breadcrumbs();
        $data = [
            'title'         => 'Teacher Menu',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => 'v_home',
            'breadcrumbs'   => $breadcrumb->buildAuto()
        ];

        return view('layouts/users_layouts/v_wrapper', $data);
    }

    public function students()
    {
        if (session()->get('level') <> 1 || session()->get('level') <> 2 || session()->get('level') <> 3 || session()->get('level') <> 4) {
            return redirect()->to(base_url('home'));
        }
        $breadcrumb = new Breadcrumbs();
        $data = [
            'title'         => 'Student Menu',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => 'v_home',
            'breadcrumbs'   => $breadcrumb->buildAuto()
        ];

        return view('layouts/users_layouts/v_wrapper', $data);
    }

    public function guests()
    {
        if (session()->get('level') <> 1 || session()->get('level') <> 2 || session()->get('level') <> 5) {
            return redirect()->to(base_url('home'));
        }
        $breadcrumb = new Breadcrumbs();
        $data = [
            'title'         => 'Guest Menu',
            'static_url'    => '<?= "dashboard" ?>',
            'isi'           => 'v_home',
            'breadcrumbs'   => $breadcrumb->buildAuto()
        ];

        return view('layouts/users_layouts/v_wrapper', $data);
    }
}
