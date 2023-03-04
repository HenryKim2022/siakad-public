<?php

namespace App\Controllers\Pages;

use App\Modules\Breadcrumbs\Breadcrumbs;
use App\Controllers\BaseController;
use App\Models\carousel_mod;


class Carousels_Data extends BaseController
{
    protected $caroumod;
    protected $breadcrumbs;
    public function __construct()
    {
        helper(['form']);
        $this->caroumod = new carousel_mod();
        $this->breadcrumbs = new Breadcrumbs();
    }

    // Show carousel data list in table
    public function index()
    {
        $data = [
            'title'             => 'Carousels Data',
            'isi'               => 'pages/users_pages/data_manages/v_plugins_data',
            'carousel_data'     => $this->caroumod->getDetails(),
            'breadcrumbs'       => $this->breadcrumbs->buildAuto()
        ];

        return view('layouts/users_layouts/v_wrapper', $data);
    }

    // Add caroseul data into db & table
    public function add()
    {

        // dd($this->request->getVar());
        // dd($this->request->getVar('carousel_id'));

        $send = $this->caroumod->insert([
            'carousel_id'       => $this->request->getVar('add_carousel_id'),
            'carousel_title'    => $this->request->getVar('add_carousel_title'),
            'carousel_alt'      => $this->request->getVar('add_carousel_alt'),
            'carousel_status'   => $this->request->getVar('add_carousel_status'),
            'carousel_desc'     => $this->request->getVar('add_carousel_desc')
        ]);

        $carounotif = $this->request->getVar('add_carousel_id');
        session()->setFlashdata('message', "{$carounotif} Added!!!");
        return redirect()->to(base_url('/admin/carousels-data'));
    }

    //
    public function details($carou_id)
    {
        $data = [
            'title'         => 'Carousel Details',
            'isi'           => 'pages/users_pages/data_manages/v_carousel_details',
            'currTab'       => 'carouseldata',
            'carousel_data'  => $this->caroumod->getDetails($carou_id),
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        if (empty($data['carousel_data'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Carousel Id: ' . $carou_id . ' was not found !!!');
        }

        return view('layouts/users_layouts/v_wrapper', $data);
    }

    public function edit($carou_id)
    {
        $data = [
            'title'         => 'Student Details',
            'isi'           => 'pages/users_pages/data_manages/v_student_details',
            'currTab'       => 'settings',
            'carousel_data' => $this->caroumod->getDetails($carou_id),
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        if (empty($data['carousel_data'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Carousel Id: ' . $carou_id . ' was not found !!!');
        }

        session()->setFlashdata('currTab', $data['currTab']);
        return view('layouts/users_layouts/v_wrapper', $data);
    }

    public function delete($carou_id)
    {
        $carousel_data = $this->caroumod->delDetails($carou_id);
        // dd($carousel_data);

        $carounotif = $this->request->getVar('add_carousel_id');
        session()->setFlashdata('message', "{$carounotif} Deleted!!!");
        return redirect()->to(base_url('/admin/carousels-data'));
    }
}
