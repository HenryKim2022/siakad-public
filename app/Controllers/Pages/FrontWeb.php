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

    protected $data;
    protected $title;
    protected $static_url;
    protected $isi;


    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->caroumod = new carousel_mod();
        $this->countdownmod = new countdown_mod();
        $this->breadcrumbs = new Breadcrumbs();

        $this->data = [];
        $this->title = "";
        $this->static_url = "";
        $this->isi = "";
    }


    public function index()
    {
        $this->isi = 'pages/frontweb_pages/news';
        if (!empty($this->session->get('log'))) {
            $this->title = "News";
            $this->static_url = base_url('news');
        } else {
            $this->title = "Front Page";
            $this->static_url = base_url('');
        }

        $arrData = [
            'isi' => $this->isi,
            'title' => $this->title,
            'static_url' => $this->static_url
        ];

        if ($this->caroumod->getDetails()) {      //IF RESP == NOT NULL
            if ($this->countdownmod->getDetails()) {
                return $this->DataSetter($arrData);
            } else {
                $this->DataSetter($arrData);
                return $this->ifRespNull();
            }

            // 
        } else {      //IF RESP == NULL
            $this->DataSetter($arrData);
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
        $this->isi = 'pages/frontweb_pages/help';

        $this->title = "Help";
        $this->static_url = base_url('');

        $arrData = [
            'isi' => $this->isi,
            'title' => $this->title,
            'static_url' => $this->static_url
        ];

        if ($this->countdownmod->getDetails()) {
            return $this->DataSetter($arrData);
        } else {
            $this->DataSetter($arrData);
            return $this->ifRespNull();
        }
    }


    public function contacts()
    {
        $this->isi = 'pages/frontweb_pages/contacts';

        $this->title = "Contacts";
        $this->static_url = base_url('');

        $arrData = [
            'isi' => $this->isi,
            'title' => $this->title,
            'static_url' => $this->static_url
        ];

        if ($this->countdownmod->getDetails()) {
            return $this->DataSetter($arrData);
        } else {
            $this->DataSetter($arrData);
            return $this->ifRespNull();
        }
    }


    public function aboutus()
    {
        $this->isi = 'pages/frontweb_pages/aboutus';

        $this->title = "About Us";
        $this->static_url = base_url('');

        $arrData = [
            'isi' => $this->isi,
            'title' => $this->title,
            'static_url' => $this->static_url
        ];

        if ($this->countdownmod->getDetails()) {
            return $this->DataSetter($arrData);
        } else {
            $this->DataSetter($arrData);
            return $this->ifRespNull();
        }
    }

    public function supports()
    {
        $this->isi = 'pages/frontweb_pages/supports';

        $this->title = "Supports";
        $this->static_url = base_url('');

        $arrData = [
            'isi' => $this->isi,
            'title' => $this->title,
            'static_url' => $this->static_url
        ];

        if ($this->countdownmod->getDetails()) {
            return $this->DataSetter($arrData);
        } else {
            $this->DataSetter($arrData);
            return $this->ifRespNull();
        }
    }


    public function emailus()
    {
        $this->isi = 'pages/frontweb_pages/emailus';

        $this->title = "Email Us";
        $this->static_url = base_url('');

        $arrData = [
            'isi' => $this->isi,
            'title' => $this->title,
            'static_url' => $this->static_url
        ];

        if ($this->countdownmod->getDetails()) {
            return $this->DataSetter($arrData);
        } else {
            $this->DataSetter($arrData);
            return $this->ifRespNull();
        }
    }


    public function callus()
    {
        $this->isi = 'pages/frontweb_pages/callus';

        $this->title = "Call Us";
        $this->static_url = base_url('');

        $arrData = [
            'isi' => $this->isi,
            'title' => $this->title,
            'static_url' => $this->static_url
        ];

        if ($this->countdownmod->getDetails()) {
            return $this->DataSetter($arrData);
        } else {
            $this->DataSetter($arrData);
            return $this->ifRespNull();
        }
    }


    public function test()
    {
        $this->isi = 'pages/frontweb_pages/test';

        $this->title = "Test";
        $this->static_url = base_url('test');

        $arrData = [
            'isi' => $this->isi,
            'title' => $this->title,
            'static_url' => $this->static_url
        ];


        if ($this->countdownmod->getDetails($this->isi)) {
            return $this->DataSetter($arrData);
        } else {
            $this->DataSetter($arrData);
            return $this->ifRespNull();
        }
    }


    public function DataSetter()
    {
        $this->data = [
            'sitename'          => 'SIAKAD Campus',
            'title'             => $this->title,
            'static_url'        => $this->static_url,
            'isi'               => $this->isi,
            'carousel_data'     => $this->caroumod->getDetails(),
            'countdown_data'    => $this->countdownmod->getDetails(),
            'breadcrumbs'       => $this->breadcrumbs->buildAuto()
        ];

        $this->session->setFlashdata($this->data);
        return view('layouts/frontweb_layouts/v_frontweb_wrapper', $this->data);
    }
}
