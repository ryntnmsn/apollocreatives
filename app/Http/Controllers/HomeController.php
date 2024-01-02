<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Company;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $banners = Banner::where('is_visible', '1');
        $testimonials = Testimonial::where('is_visible', '1');
        return view('index', [
            'banners' => $banners->get(),
            'testimonials' => $testimonials->get(),
        ]);
    }

    public function works() {
        $companies = Company::where('is_visible', '1');
        return view('works', [
            'companies' => $companies->get()
        ]);
    }

    public function works_show($slug) {
        $companies = Company::where('is_visible', '1')->limit(4);
        $company = Company::with('works')->where('slug', $slug)->first();
        return view('works_show', [
            'company' => $company,
            'companies' => $companies->get()
        ]);
    }

    public function services() {
        return view('services');
    }

    public function services_show($slug) {
        $service = Service::where('slug', $slug)->with('subservices')->first();
        return view('services_show', [
            'service' => $service,
        ]);
    }

    public function about() {
        $members = Team::where('is_visible', '1');
        return view('about', [
            'members' => $members->get()
        ]);
    }

    public function plans() {
        return view('plans');
    }
}
