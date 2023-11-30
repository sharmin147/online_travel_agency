<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontenduser.home');
    }
    public function about(){
        return view('frontenduser.about');
    }
    public function pages(){
        return view('frontenduser.pages');
    }
    public function service(){
        return view('frontenduser.service');
    }
    public function tour(){
        return view('frontenduser.tour');
    }
    public function testimonial(){
        return view('frontenduser.testimonial');

    }
    public function destination(){
        return view('frontenduser.destination');

    }

    public function contact(){
        return view('frontenduser.contact');
    }
    public function layout(){
        return view('frontenduser.layout');
    }
}
