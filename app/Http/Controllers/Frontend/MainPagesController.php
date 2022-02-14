<?php

namespace App\Http\Controllers\Frontend;

use App\AboutMe;
use App\Education;
use App\Experience;
use App\Http\Controllers\Controller;
use App\Interest;
use App\Language;
use App\MainContent;
use App\News;
use App\Partner;
use App\Portfolio;
use App\Programming;
use App\Service;
use App\Testimonial;
use Illuminate\Http\Request;

class MainPagesController extends Controller
{
    

    public function index(){

        $main = MainContent::first();
        $aboutme = AboutMe::first();
        $services = Service::where('status','Active')->orderBy('id', 'ASC')->get();
        $interestes = Interest::where('status','Active')->orderBy('id', 'ASC')->get();
        $programmings = Programming::where('status','Active')->orderBy('id', 'DESC')->get();
        $languages = Language::where('status','Active')->orderBy('id', 'DESC')->get();
        $educations = Education::where('status','Active')->orderBy('id', 'DESC')->get();
        $experiences = Experience::where('status','Active')->orderBy('id', 'DESC')->get();
        $partners = Partner::where('status','Active')->orderBy('id', 'DESC')->get();
        $testimonials = Testimonial::where('status','Active')->orderBy('id', 'DESC')->get();

        $portfolios = Portfolio::where('status','Active')->orderBy('id', 'DESC')->get();
        $newses = News::where('status','Active')->orderBy('id', 'DESC')->get();


        return view('frontend.index', compact('main','aboutme','services','interestes','programmings','languages','educations','experiences','partners','testimonials','portfolios','newses'));
    }

}
