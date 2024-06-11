<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function filmWorks() {
        return view('film_works');
    }
}
