<?php

namespace App\controllers;

class PageController
{

    public function home()
    {


        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
