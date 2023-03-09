<?php

namespace App\Controllers\Pages;

use App\Modules\Breadcrumbs\Breadcrumbs;
use App\Controllers\BaseController;
use App\Models\student_mod;


class Students_Data extends BaseController
{
    protected $studentmod;
    protected $breadcrumbs;
    public function __construct()
    {
        helper(['form']);
        $this->studentmod = new student_mod();
        $this->breadcrumbs = new Breadcrumbs();
    }

    // Show student data list in table
    public function index()
    {

        if ($this->studentmod->getDetails()) {      //IF RESP == NOT NULL
            $data = [
                'title'         => 'Students Data',
                'isi'           => 'pages/users_pages/data_manages/v_students_data',
                'student_data'  => $this->studentmod->getDetails(),
                'breadcrumbs'   => $this->breadcrumbs->buildAuto()
            ];
        } else {    //IF RESP == NULL THEN 
            return redirect()->to(base_url('/admin/students-data'));
        }

        return view('layouts/users_layouts/v_wrapper', $data);
    }

    // Add student data into db & table
    public function add()
    {

        // dd($this->request->getVar());
        // dd($this->request->getVar('nim'));

        $send = $this->studentmod->insert([
            'nim'           => $this->request->getVar('add_nim'),
            'first_na'      => $this->request->getVar('add_first_na'),
            'last_na'       => $this->request->getVar('add_last_na'),
            'birth_loc'     => $this->request->getVar('add_birth_loc'),
            'birth_date'    => $this->request->getVar('add_birth_date'),
            'gender'        => $this->request->getVar('add_gender'),
            'std_addr'      => $this->request->getVar('add_std_addr'),
            'std_phone'     => $this->request->getVar('add_std_phone'),
            'std_email'     => $this->request->getVar('add_std_email')
        ]);

        $nimnotif = $this->request->getVar('add_nim');
        session()->setFlashdata('message', "{$nimnotif} Added!!!");
        return redirect()->to(base_url('/admin/students-data'));
    }

    //
    public function details($nim)
    {
        $data = [
            'title'         => 'Student Details',
            'isi'           => 'pages/users_pages/data_manages/v_student_details',
            'currTab'       => 'biodata',
            'student_data'  => $this->studentmod->getDetails($nim),
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        if (empty($data['student_data'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nim ' . $nim . ' was not found !!!');
        }

        return view('layouts/users_layouts/v_wrapper', $data);
    }

    public function edit($nim)
    {
        $data = [
            'title'         => 'Student Details',
            'isi'           => 'pages/users_pages/data_manages/v_student_details',
            'currTab'       => 'settings',
            'student_data'  => $this->studentmod->getDetails($nim),
            'breadcrumbs'   => $this->breadcrumbs->buildAuto()
        ];

        if (empty($data['student_data'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nim ' . $nim . ' was not found !!!');
        }

        session()->setFlashdata('currTab', $data['currTab']);
        return view('layouts/users_layouts/v_wrapper', $data);
    }

    public function delete($nim)
    {
        $student_data = $this->studentmod->delDetails($nim);
        // dd($student_data);

        $nimnotif = $this->request->getVar('add_nim');
        session()->setFlashdata('message', "{$nimnotif} Deleted!!!");
        return redirect()->to(base_url('/admin/students-data'));
    }
}
