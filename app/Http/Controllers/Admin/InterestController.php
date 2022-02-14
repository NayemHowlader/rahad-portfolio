<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterestController extends Controller
{
    
    public function index(){
     
        $interests = Interest::with(['users_addedby','users_editedby'])->orderBy('id','desc')->get();

     

        return view('admin.about.interest.index',[
            'interests' => $interests
        ]);


        
    }

    public function create(){
        
        return view('admin.about.interest.create');
    }


    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'status' => 'required'
        ]);

        $interests = Interest::create([
            'title' => $request->title,
            'status' => $request->status,
            'added_by' => Auth::User()->email
        ]);

        return back()->with('alert-success','Interest Added Successfully');
    }


    public function edit($id){
        $interest = Interest::where('id',$id)->first();

        return view('admin.about.interest.edit',[
            'interest' => $interest,
            
        ]);
    }


    public function update(Request $request,$id){

        $request->validate([
            'title' => 'required',
            'status' => 'required'
        ]);

        Interest::where('id',$id)->update([
            'title' => $request->title,
            'status' => $request->status,
            'edited_by' =>Auth::User()->email
        ]);

        return back()->with('alert-success','Interest Updated Successfully');

    }


    public function destroy($id){
        $interests = Interest::where('id',$id)->first();
        $interests->delete();
        return back()->with('alert-success','Interest Deleted Successfully');
    }



}
