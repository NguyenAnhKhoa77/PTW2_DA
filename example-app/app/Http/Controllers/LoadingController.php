<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadingController extends Controller
{
    public function home() {
        return view('fontend.index');
    }
}
