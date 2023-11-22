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
}
