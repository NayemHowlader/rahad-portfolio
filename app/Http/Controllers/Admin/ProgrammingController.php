<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Programming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgrammingController extends Controller
{
    
    public function index(){
     
        $programmings = Programming::with(['users_addedby','users_editedby'])->orderBy('id','desc')->get();

     

        return view('admin.about.programming.index',[
            'programmings' => $programmings
        ]);


        
    }


    public function create(){
        
        return view('admin.about.programming.create');
    }


    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'level' => 'required|integer|between:1,100',
            'status' => 'required'
        ]);

        $programmings = Programming::create([
            'title' => $request->title,
            'level' => $request->level,
            'status' => $request->status,
            'added_by' => Auth::User()->email
        ]);

        return back()->with('alert-success','Programming Added Successfully');
    }


    public function edit($id){
        $programming = Programming::where('id',$id)->first();

        return view('admin.about.programming.edit',[
            'programming' => $programming,
            
        ]);
    }


    public function update(Request $request,$id){

        $request->validate([
            'title' => 'required',
            'level' => 'required|integer|between:1,100',
            'status' => 'required'
        ]);

        Programming::where('id',$id)->update([
            'title' => $request->title,
            'level' => $request->level,
            'status' => $request->status,
            'edited_by' =>Auth::User()->email
        ]);

        return back()->with('alert-success','Programming Language Updated Successfully');

    }


    public function destroy($id){
        $programming = Programming::where('id',$id)->first();
        $programming->delete();
        return back()->with('alert-success','Programming Language Deleted Successfully');
    }

}
