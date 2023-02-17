<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class auth_filter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('log') != true) {
            session()->setFlashdata('error', "You're not signed in !!!");
            return redirect()->to('auth/signin');
        }
        // if (session()->get('level') == "") {
        //     session()->setFlashdata('error', "You're not signed in !!!");
        //     return redirect()->to('auth/signin');
        // }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // if (session()->get('log') == true) {
        //     return redirect()->to('home');
        // }


        // if (session()->get('level') == 2) {
        //     return redirect()->to('home');
        // }
        // if (session()->get('level') == 3) {
        //     return redirect()->to('home');
        // }
        // if (session()->get('level') == 4) {
        //     return redirect()->to('home');
        // }
        // if (session()->get('level') == 5) {
        //     return redirect()->to('home');
        // }
    }
}
