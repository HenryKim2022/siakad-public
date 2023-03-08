<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use App\Modules\Breadcrumbs\Breadcrumbs;
use App\Models\carousel_mod;

class FrontWeb extends BaseController
{

    protected $session;
    protected $caroumod;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->caroumod = new carousel_mod();
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


        $breadcrumbs = new Breadcrumbs();
        $arrCaro_data = $this->caroumod->getDetails();

        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/news',
            'carousel_data' => $arrCaro_data,
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }


    public function help()
    {
        $title = "Help";
        $static_url = base_url('');

        $breadcrumbs = new Breadcrumbs();
        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/help',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }
    public function contacts()
    {
        $title = "Contacts";
        $static_url = base_url('');

        $breadcrumbs = new Breadcrumbs();
        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/contacts',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }


    public function aboutus()
    {
        $title = "About Us";
        $static_url = base_url('');

        $breadcrumbs = new Breadcrumbs();
        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/aboutus',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }

    public function supports()
    {
        $title = "Supports";
        $static_url = base_url('');

        $breadcrumbs = new Breadcrumbs();
        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/supports',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }


    public function emailus()
    {
        $title = "Email Us";
        $static_url = base_url('');

        $breadcrumbs = new Breadcrumbs();
        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/emailus',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }

    public function callus()
    {
        $title = "Call Us";
        $static_url = base_url('');

        $breadcrumbs = new Breadcrumbs();
        $data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $title,
            'static_url'    => $static_url,
            'isi'           => 'pages/frontweb_pages/callus',
            'breadcrumbs'   => $breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $data);
    }
}
