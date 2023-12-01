<?php

namespace App\Controllers;

class local extends BaseController
{
    public function about()
    {
        return view('local/about');
    }
    public function contact()
    {
        return view('local/contact');
    }
    public function service()
    {
        return view('local/service');
    }
}
