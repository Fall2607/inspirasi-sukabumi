<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function index(): string
    {
        return view('site/ajuan');
    }
}
