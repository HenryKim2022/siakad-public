<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use App\Modules\Breadcrumbs\Breadcrumbs;
use App\Models\carousel_mod;
use App\Models\countdown_mod;
use App\Models\check_db_mod;


class FrontWeb extends BaseController
{

    protected $session;
    protected $caroumod;
    protected $countdownmod;
    protected $breadcrumbs;

    protected $data = array();
    protected $title;
    protected $static_url;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->caroumod = new carousel_mod();
        $this->countdownmod = new countdown_mod();
        $this->breadcrumbs = new Breadcrumbs();
    }


    public function index()
    {
        if (!empty($this->session->get('log'))) {
            $this->title = "News";
            $this->static_url = base_url('news');
        } else {
            $this->title = "Front Page";
            $this->static_url = base_url('');
        }

        if ($this->caroumod->getDetails()) {      //IF RESP == NOT NULL
            if ($this->countdownmod->getDetails()) {
                $this->data = [
                    'sitename'          => 'SIAKAD Campus',
                    'title'             => $this->title,
                    'static_url'        => $this->static_url,
                    'isi'               => 'pages/frontweb_pages/news',
                    'carousel_data'     => $this->caroumod->getDetails(),
                    'countdown_data'    => $this->countdownmod->getDetails(),
                    'breadcrumbs'       => $this->breadcrumbs->buildAuto()
                ];
                $this->session->setFlashdata($this->data);
                return view('layouts/frontweb_layouts/v_frontweb_wrapper', $this->data);
                //
            } else {
                $this->data = [
                    'sitename'          => 'SIAKAD Campus',
                    'title'             => $this->title,
                    'static_url'        => $this->static_url,
                    'isi'               => 'pages/frontweb_pages/news',
                    'carousel_data'     => $this->caroumod->getDetails(),
                    'countdown_data'    => $this->countdownmod->getDetails(),
                    'breadcrumbs'       => $this->breadcrumbs->buildAuto()
                ];
                $this->session->setFlashdata($this->data);
                view('layouts/frontweb_layouts/v_frontweb_wrapper', $this->data);
                return $this->ifRespNull();
            }

            // 
        } else {      //IF RESP == NULL
            $this->data = [
                'sitename'          => 'SIAKAD Campus',
                'title'             => $this->title,
                'static_url'        => $this->static_url,
                'isi'               => 'pages/frontweb_pages/news',
                'carousel_data'     => $this->caroumod->getDetails(),
                'countdown_data'    => $this->countdownmod->getDetails(),
                'breadcrumbs'       => $this->breadcrumbs->buildAuto()
            ];
            $this->session->setFlashdata($this->data);
            view('layouts/frontweb_layouts/v_frontweb_wrapper', $this->data);
            return $this->ifRespNull();
        }
    }


    public function ifRespNull()
    {
        if (!empty($this->session->get('log'))) {
            return redirect()->to(base_url('news'));
        } else {
            return redirect()->to(base_url());
        }
    }

    public function help()
    {
        $this->title = "Help";
        $this->static_url = base_url('');

        $this->data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $this->title,
            'static_url'    => $this->static_url,
            'isi'           => 'pages/frontweb_pages/help',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $this->data);
    }


    public function contacts()
    {
        $this->title = "Contacts";
        $this->static_url = base_url('');

        $this->data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $this->title,
            'static_url'    => $this->static_url,
            'isi'           => 'pages/frontweb_pages/contacts',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $this->data);
    }


    public function aboutus()
    {
        $this->title = "About Us";
        $this->static_url = base_url('');

        $this->data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $this->title,
            'static_url'    => $this->static_url,
            'isi'           => 'pages/frontweb_pages/aboutus',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $this->data);
    }

    public function supports()
    {
        $this->title = "Supports";
        $this->static_url = base_url('');

        $this->data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $this->title,
            'static_url'    => $this->static_url,
            'isi'           => 'pages/frontweb_pages/supports',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $this->data);
    }


    public function emailus()
    {
        $this->title = "Email Us";
        $this->static_url = base_url('');

        $this->data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $this->title,
            'static_url'    => $this->static_url,
            'isi'           => 'pages/frontweb_pages/emailus',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $this->data);
    }


    public function callus()
    {
        $this->title = "Call Us";
        $this->static_url = base_url('');

        $this->data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $this->title,
            'static_url'    => $this->static_url,
            'isi'           => 'pages/frontweb_pages/callus',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $this->data);
    }


    public function test()
    {
        $this->title = "Test";
        $this->static_url = base_url('test');

        $this->data = [
            'sitename'      => 'SIAKAD Campus',
            'title'         => $this->title,
            'static_url'    => $this->static_url,
            'isi'           => 'pages/frontweb_pages/test',
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $this->data);
    }
}
