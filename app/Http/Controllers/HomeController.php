<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   

    public function index() {
        $services = Service::where('is_visible', '1');
        $testimonials = Testimonial::where('is_visible', '1');
        $faqs = Faq::where('is_visible', '1');
        return view('index', [
            'services' => $services->get(),
            'testimonials' => $testimonials->get(),
            'faqs' => $faqs->get()
        ]);
    }

    public function works() {
        $companies = Company::where('is_visible', '1');
        return view('works', [
            'companies' => $companies->get()
        ]);
    }

    public function works_show($slug) {
        $company = Company::with('works')->where('slug', $slug)->first();
        return view('works_show', [
            'company' => $company
        ]);
    }

    public function services() {
        $services = Service::where('is_visible', '1');
        return view('services', [
            'services' => $services->get(),
        ]);
    }

    public function services_show($slug) {
        $service = Service::where('slug', $slug)->first();
        return view('services_show', [
            'service' => $service
        ]);
    }

    public function about() {
        return view('about');
    }
}
