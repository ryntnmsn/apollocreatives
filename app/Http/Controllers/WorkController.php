<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function filmWorks() {
        return view('film_works');
    }

    public function eventsWorks() {
        return view('events');
    }

    public function animationWorks() {
        return view('animations');
    }

    public function docuWorks() {
        return view('documentaries');
    }

    
}
