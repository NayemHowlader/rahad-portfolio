<?php

namespace App\Http\Controllers\Frontend;

use App\AboutMe;
use App\Http\Controllers\Controller;
use App\MainContent;
use Illuminate\Http\Request;

class MainPagesController extends Controller
{
    

    public function index(){

        $main = MainContent::first();
        // $services = Service::all();
        // $portfolios = Portfolio::all();
        $aboutme = AboutMe::first();
        return view('frontend.index', compact('main','aboutme'));
    }

}
