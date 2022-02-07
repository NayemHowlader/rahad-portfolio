<?php

namespace App\Http\Controllers\Admin;

use App\AboutMe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutMeController extends Controller
{
    
    public function index(){


        $about = AboutMe::first();
        return view('admin.about.about_me',compact('about'));
    }



    public function update(Request $request,$id)
    {
    
        
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'study'=>'required',
            'degree'=>'required',
            'mail'=>'required',
            'phone'=>'required',
            'description'=>'required',
        ]);

        
        

        AboutMe::where('id',$id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'study' => $request->study,
            'degree' => $request->degree,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'description' => $request->description,
        ]);

        return back()->with('alert-success','About Me update Successfully');

    }
}
