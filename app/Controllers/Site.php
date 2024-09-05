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

    public function list_proposal()
    {
        $data = [
            'mark' => 'propsal',
            'menu' => 'Menus',
            'title' => 'List Proposal',
        ];
        return view('site/v_list_proposal', $data);
    }

    public function list_penerapan()
    {
        $data = [
            'mark' => 'penerapan',
            'menu' => 'Menus',
            'title' => 'List Penerapan',
        ];
        return view('site/v_list_penerapan', $data);
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
