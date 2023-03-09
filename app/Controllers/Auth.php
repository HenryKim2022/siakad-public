<?php

namespace App\Controllers;

use App\Models\auth_mod;

class Auth extends BaseController
{

    protected $session;
    protected $authmod;
    public function __construct()
    {
        helper(['form']);
        $this->session = \Config\Services::session();

        $db = db_connect();
        $this->authmod = new auth_mod($db);
    }


    public function signup()
    {
        $pagedata = [
            'title'         => 'User Registration',
            'static_url'    => '<?= "auth/signup" ?>'
        ];

        return view('pages/v_signup', $pagedata);
    }


    public function savereg()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'first_na' => ['label' => 'First Name', 'rules' => 'required|min_length[0]'],
            'last_na' => ['label' => 'Last Name', 'rules' => 'min_length[0]'],
            'username' => ['label' => 'Username', 'rules' =>
            'required|alpha_numeric_space|min_length[5]|max_length[18]|is_unique[user_auth.username]'],
            'level' => ['label' => 'Access Level', 'rules' => 'required'],
            'phone' => ['label' => 'Phone Number', 'rules' => 'required|min_length[0]|max_length[16]'],
            'email' => ['label' => 'Email', 'rules' =>
            'required|min_length[6]|max_length[50]|valid_email|is_unique[user_auth.email]'],
            'password' => ['label' => 'Password', 'rules' => 'required|min_length[0]|max_length[50]'],
            'repassword' => ['label' => 'Password Confirmation', 'rules' => 'required_with[password]|matches[password]']
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        /////// IF: Valid, save2 DB
        if ($isDataValid) {
            $data = ([
                'first_na' => $this->request->getPost('first_na'),
                'last_na' => $this->request->getPost('last_na'),
                'username' => $this->request->getPost('username'),
                'level' => $this->request->getPost('level'),
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password')
            ]);

            $result = $this->authmod->saveData($data);
            if ($result) {
                $this->session->setFlashdata('message', 'New user is registered Sucessfully !!!');
                return redirect()->to(base_url('/auth/signin'));
            } else {
                $data = array(
                    'firstna' => $this->request->getPost('first_na'),
                    'lastna' => $this->request->getPost('last_na'),
                    'usern' => $this->request->getPost('username'),
                    'lvl' => $this->request->getPost('level'),
                    'phone_num' => $this->request->getPost('phone'),
                    'mail' => $this->request->getPost('email'),
                    'pass' => $this->request->getPost('password'),
                    'repass' => $this->request->getPost('repassword'),
                    'error' => "Something went wrong :("
                );

                $this->session->setFlashdata($data);
                return redirect()->to(base_url('/auth/signup'));
            }
        } else {
            /////// Else: Not Valid
            //// Array setFlashData
            $data = ([
                'firstna' => $this->request->getPost('first_na'),
                'lastna' => $this->request->getPost('last_na'),
                'usern' => $this->request->getPost('username'),
                'lvl' => 5,
                'phone_num' => $this->request->getPost('phone'),
                'mail' => $this->request->getPost('email'),
                'pass' => $this->request->getPost('password'),
                'repass' => $this->request->getPost('repassword'),
                'errors' => \Config\Services::validation()->getErrors()
            ]);

            $this->session->setFlashdata($data);
            return redirect()->to(base_url('/auth/signup'));
        }
    }


    public function signin()
    {
        $pagedata = [
            'title' => 'User Login',
            'static_url' => '<?= "auth/signin" ?>'
        ];

        return view('pages/v_signin', $pagedata);
    }


    public function checklog()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => ['label' => 'Username', 'rules' => 'required|alpha_numeric_space|min_length[5]|max_length[18]'],
            'password' => ['label' => 'Password', 'rules' => 'required|min_length[0]|max_length[50]']
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        /////// IF: Valid, save2 DB
        if ($isDataValid) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $result = $this->authmod->clogData($username, $password);

            if ($result) {
                $this->session->set('log', true);
                $this->session->set('first_na', $result['first_na']);
                $this->session->set('last_na', $result['last_na']);
                $this->session->set('username', $result['username']);
                $this->session->set('password', $result['password']);
                $this->session->set('level', $result['level']);
                $this->session->set('phone', $result['phone']);
                $this->session->set('email', $result['email']);
                $this->session->set('photo', $result['photo']);
                $this->session->set('user_ip', $this->request->getIPAddress());

                // Update UserLogin IP
                $data = [
                    // 'user_ip' => $this->request->getIPAddress(),
                    'user_ip' => Auth::getUserIpAddr(),
                ];

                $this->authmod->update($result['username'], $data);

                return redirect()->to(base_url('/home'));
            } else {

                $data = array(
                    'username' => $this->request->getPost('username'),
                    'password' => $this->request->getPost('password'),
                    'error' => "You're using wrong credentials !!!"
                );

                $this->session->setFlashdata($data);
                return redirect()->to(base_url('/auth/signin'));
            }
        } else {
            //// Array setFlashData
            $data = array(
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'errors' => \Config\Services::validation()->getErrors()
            );

            $this->session->setFlashdata($data);
            return redirect()->to(base_url('/auth/signin'));
        }
    }


    public function getUserIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }


    public function editreg()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'first_na' => ['label' => 'First Name', 'rules' => 'required|min_length[0]'],
            'last_na' => ['label' => 'Last Name', 'rules' => 'min_length[0]'],
            'username' => ['label' => 'Username', 'rules' =>
            'required|alpha_numeric_space|min_length[5]|max_length[18]|is_unique[user_auth.username]'],
            // 'level' => ['label' => 'Access Level', 'rules' => 'required'],
            'phone' => ['label' => 'Phone Number', 'rules' => 'required|min_length[0]|max_length[16]'],
            'email' => ['label' => 'Email', 'rules' =>
            'required|min_length[6]|max_length[50]|valid_email|is_unique[user_auth.email]'],
            'password' => ['label' => 'Password', 'rules' => 'required|min_length[3]|max_length[50]'],
            // 'repassword' => ['label' => 'Password Confirmation', 'rules' => 'required_with[password]|matches[password]']
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        /////// IF: Valid, save2 DB
        if ($isDataValid) {
            $data = ([
                'first_na' => $this->request->getPost('first_na'),
                'last_na' => $this->request->getPost('last_na'),
                'username' => $this->request->getPost('username'),
                // 'level' => 5,
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password')
            ]);

            // $result = $this->authmod->saveData($data);

            // Update UserAcc Data
            $data = [
                // 'user_ip' => $this->request->getIPAddress(),
                'user_ip' => Auth::getUserIpAddr(),
            ];
            $result = $this->authmod->update($data['username'], $data);

            if ($result) {
                $this->session->setFlashdata('message', 'Your data update Sucessfully !!!');
                return redirect()->to(base_url('/auth/signout'));
            } else {
                $data = array(
                    'firstna' => $this->request->getPost('first_na'),
                    'lastna' => $this->request->getPost('last_na'),
                    'usern' => $this->request->getPost('username'),
                    // 'lvl' => $this->request->getPost('level'),
                    'phone_num' => $this->request->getPost('phone'),
                    'mail' => $this->request->getPost('email'),
                    'pass' => $this->request->getPost('password'),
                    // 'repass' => $this->request->getPost('repassword'),
                    'error' => "Something went wrong :("
                );

                $this->session->setFlashdata($data);
                return redirect()->to(base_url('/myprofile'));
            }
        } else {
            /////// Else: Not Valid
            //// Array setFlashData
            $data = ([
                'firstna' => $this->request->getPost('first_na'),
                'lastna' => $this->request->getPost('last_na'),
                'usern' => $this->request->getPost('username'),
                // 'lvl' => 5,
                'phone_num' => $this->request->getPost('phone'),
                'mail' => $this->request->getPost('email'),
                'pass' => $this->request->getPost('password'),
                // 'repass' => $this->request->getPost('repassword'),
                'errors' => \Config\Services::validation()->getErrors()
            ]);

            $this->session->setFlashdata($data);
            return redirect()->to(base_url('/myprofile'));
        }
    }

    public function signout()
    {
        $this->session->remove('log');
        $this->session->remove('first_na');
        $this->session->remove('last_na');
        $this->session->remove('username');
        $this->session->remove('level');
        $this->session->remove('phone');
        $this->session->remove('email');
        $this->session->remove('photo');

        $this->session->setFlashdata('message', "Logged Out !!!");


        // $this->session->destroy();
        return redirect()->to(base_url('/auth/signin'));
    }
}
