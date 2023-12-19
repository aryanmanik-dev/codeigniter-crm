<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('index');
        return redirect(base_url('index'));

    }
}
