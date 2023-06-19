<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Hero;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $typerTitles = TyperTitle::all();
        return view('frontend.pages.home' , compact('hero', 'typerTitles' ) );
    }
}
