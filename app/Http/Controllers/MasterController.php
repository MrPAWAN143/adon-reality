<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function faq()
    {
        return view('Pages.faq');
    }

    public function contact()
    {
        return view('Pages.contact-us');
    }

    public function aboutUs()
    {
        return view('Pages.about-us');
    }

    public function service()
    {
        return view('Pages.service-page');
    }

    public function career()
    {
        return view('Pages.career');
    }

    public function testimonials()
    {
        return view('Pages.testimonials');
    }

    public function termsAndConditions()
    {
        return view('Pages.terms-and-conditions');
    }
}
