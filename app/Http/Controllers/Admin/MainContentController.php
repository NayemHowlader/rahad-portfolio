<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MainContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MainContentSeeder;

class MainContentController extends Controller
{
    

    public function index()
    {
        $main = MainContent::first();
        return view('admin.main.index',compact('main'));
    }



    public function update(Request $request)
    {

        $this->validate($request,[
            'title'=>'required|string',
            'sub_title1'=>'required|string',
            'sub_title2'=>'required|string',
            'sub_title3'=>'required|string'
        ]);
        $main = MainContent::first();
        $main->title = $request->title;
        $main->sub_title1 = $request->sub_title1;
        $main->sub_title2 = $request->sub_title2;
        $main->sub_title3 = $request->sub_title3;

        $main->save();

        return back()->with('alert-success','User update Successfully');

    }



    




}
