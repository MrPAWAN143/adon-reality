<?php

namespace App\Http\Controllers;

use App\Models\DevelopmentPartners;
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
        $developmentPartner = DevelopmentPartners::where('is_active', 1)
           ->inRandomOrder()
           ->take(3)
           ->get();
        return view('Pages.about-us', compact('developmentPartner'));
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
