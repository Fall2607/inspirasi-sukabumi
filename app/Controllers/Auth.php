<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/v_login');
    }

    public function process()
    {
        return redirect()->to('/dashboard');
    }
}
