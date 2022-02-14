<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use App\Partner;
use App\Portfolio;
use App\Service;
use App\Testimonial;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $superadmin = User::where('role','SuperAdmin')->count();
        $admin = User::where('role','Admin')->count();
        $moderator = User::where('role','Moderator')->count();
        $services = Service::where('status','Active')->count();
        $partners = Partner::where('status','Active')->count();
        $testimonials = Testimonial::where('status','Active')->count();
        $portfolios = Portfolio::where('status','Active')->count();
        $news = News::where('status','Active')->count();
        return view('admin.home.dashboard', compact('superadmin','admin','moderator','services','partners','testimonials','portfolios','news'));
    }
}
