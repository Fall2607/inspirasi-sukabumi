<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function index()
    {
        $data = [
            'mark' => 'dash',
            'menu' => 'Pages',
            'title' => 'Dashboard',
        ];
        return view('site/v_main', $data);
    }

    public function inovasi_daerah()
    {
        $data = [
            'mark' => 'inovasi',
            'menu' => 'Menus',
            'title' => 'Inovasi Daerah',
        ];
        return view('site/v_inovasi_daerah', $data);
    }

    public function profile()
    {
        $data = [
            'mark' => 'prof',
            'menu' => 'Account Pages',
            'title' => 'Profile',
        ];
        return view('site/v_profile', $data);
    }
}
