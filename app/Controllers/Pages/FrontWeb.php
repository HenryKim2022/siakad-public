<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use App\Modules\Breadcrumbs\Breadcrumbs;
use App\Models\carousel_mod;

class FrontWeb extends BaseController
{

    protected $session;
    protected $caroumod;
    protected $breadcrumbs;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->caroumod = new carousel_mod();
        $this->breadcrumbs = new Breadcrumbs();
    }


    public function index()
    {
        if (!empty($this->session->get('log'))) {
            $title = "News";
            $static_url = '<?= base_url() ?>';
        } else {
            $title = "Front Page";
            $static_url = base_url('');
        }

        if ($this->caroumod->getDetails()) {      //IF RESP == NOT NULL
            $data = [
                'sitename'      => 'SIAKAD Campus',
                'title'         => $title,
                'static_url'    => $static_url,
                'isi'           => 'pages/frontweb_pages/news',
                'carousel_data' => $this->caroumod->getDetails(),
                'breadcrumbs'   => $this->breadcrumbs->buildAuto()
            ];
        } else {      //IF RESP == NULL
            return redirect()->to(base_url(''));
        }

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }


    public function help()
    {
        $title = "Help";
        $static_url = base_url('');

        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/help',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }
    public function contacts()
    {
        $title = "Contacts";
        $static_url = base_url('');

        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/contacts',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }


    public function aboutus()
    {
        $title = "About Us";
        $static_url = base_url('');

        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/aboutus',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }

    public function supports()
    {
        $title = "Supports";
        $static_url = base_url('');

        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/supports',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }


    public function emailus()
    {
        $title = "Email Us";
        $static_url = base_url('');

        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/emailus',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }


    public function callus()
    {
        $title = "Call Us";
        $static_url = base_url('');

        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/callus',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }
}
