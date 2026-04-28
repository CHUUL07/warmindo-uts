<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }
        return view('pages/login', [], ['layout' => 'layouts/layout_clear']);
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // STATIC HARDCODED CREDENTIALS — NO DATABASE
        if ($username === 'admin' && $password === 'admin123') {
            session()->set([
                'isLoggedIn' => true,
                'username'   => 'admin',
                'fullname'   => 'Administrator',
                'role'       => 'admin',
            ]);
            return redirect()->to('/dashboard');
        }

        session()->setFlashdata('error', 'Username atau password salah. Coba lagi.');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        // Redirect to guest dashboard, NOT login
        return redirect()->to('/dashboard');
    }
}