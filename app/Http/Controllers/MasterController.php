<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use App\Models\FeaturedAndAward;
use App\Models\DevelopmentPartners;

class MasterController extends Controller
{
    public function faq()
    {
        return view('Pages.faq');
    }

    public function contact()
    {
        $testimonials = Testimony::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('Pages.contact-us', compact('testimonials'));
    }

    public function aboutUs()
    {
        $awards = FeaturedAndAward::where('is_active', 1)->inRandomOrder()->take(4)->get();
        $teamMembers = TeamMember::where('is_active', 1)->get();
        $developmentPartner = DevelopmentPartners::where('is_active', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();
        return view('Pages.about-us', compact('developmentPartner', 'teamMembers', 'awards'));
    }

    public function service()
    {
        $testimonials = Testimony::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('Pages.service-page', compact('testimonials'));
    }

    public function career()
    {
        $testimonials = Testimony::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('Pages.career', compact('testimonials'));
    }

    public function testimonials()
    {
        $testimonials = Testimony::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('Pages.testimonials', compact('testimonials'));
    }

    public function termsAndConditions()
    {
        return view('Pages.terms-and-conditions');
    }

    public function privacyPolicy()
    {
        return view('Pages.privacy-policy');
    }

    public function disclaimer()
    {
        return view('Pages.disclaimer');
    }
    public function reraDisclosures()
    {
        return view('Pages.rera-disclosures');
    }
    public function antiFraud()
    {
        return view('Pages.anti-fraud');
    }

    public function cookiesPolicy()
    {
        return view('Pages.cookie-policy');
    }
}
