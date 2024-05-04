<?php

namespace App\Http\Controllers; //namespace = package

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }
}
