<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   

    public function index() {

        $services = Service::where('is_visible', '1');
        
        return view('index', [
            'services' => $services->get()
        ]);
    }
}
