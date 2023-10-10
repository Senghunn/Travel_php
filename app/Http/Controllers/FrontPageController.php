<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index(){
        return view('front_home');
    }

    public function about(){
        return view('front_about');
    }

    public function services(){
        return view('front_services');
    }

    public function package(){
        return view('front_package');
    }

    public function contact(){
        return view('front_contact');
    }

    public function destination(){
        return view('front_destination');
    }
    public function booking(){
        return view('front_booking');
    }


    public function travelguides(){
        return view('front_travelguides');
    }

    public function testimonial(){
        return view('front_testimonial');
    }

    public function error(){
        return view('front_error');
    }
}
