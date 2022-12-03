<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Pelanggan_M;

class Pelanggan extends BaseController
{
    public function index()
    {

        if (isset($_POST['pelanggan'])) {
            $data = [
                'pelanggan' => $_POST['pelanggan'],
                'alamat' => $_POST['alamat'],
                'telp' => $_POST['telp'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
            ];

            $model = new Pelanggan_M();
            if ($model->insert($data) === false) {
                return redirect()->to(base_url("/daftar"));
            } else {
                return redirect()->to(base_url("/"));
            }
        }
        return view('home/daftar');
    }

    public function login()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $model = new Pelanggan_M();
            $user = $model->where(['email' => $email])->first();

            if (empty($user)) {
                $data['info'] = 'Email Salah !';
            } else {
                if (password_verify($password, $user['password'])) {
                    $this->setSession($user);
                    return redirect()->to(base_url("/"));
                } else {
                    $data['info'] = 'Password Salah !';
                }
            }
        }
        return view('home/login', $data);
    }

    public function setSession($user)
    {
        $data = [
            'email' => $user['email'],
        ];

        session()->set($data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url("/"));
    }
}
