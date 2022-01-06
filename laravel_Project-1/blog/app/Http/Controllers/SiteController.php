<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function home(){

        return view('HomePage');
    }

    function about(){

        return view('AboutPage');
    }

    public function contact(){

        return view('ContactPage');

    }
}
