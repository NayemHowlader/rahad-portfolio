<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    
     
    public function index(){
     
        $languages = Language::with(['users_addedby','users_editedby'])->orderBy('id','desc')->get();

     

        return view('admin.about.language.index',[
            'languages' => $languages
        ]);


        
    }


    public function create(){
        
        return view('admin.about.language.create');
    }


    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'level' => 'required|numeric|between:0.1,1.00',
            'status' => 'required'
        ]);

        $languages = Language::create([
            'title' => $request->title,
            'level' => $request->level,
            'status' => $request->status,
            'added_by' => Auth::User()->email
        ]);

        return back()->with('alert-success','Language Added Successfully');
    }


    public function edit($id){
        $language = Language::where('id',$id)->first();

        return view('admin.about.language.edit',[
            'language' => $language,
            
        ]);
    }


    public function update(Request $request,$id){

        $request->validate([
            'title' => 'required',
            'level' => 'required|numeric|between:0.1,1.00',
            'status' => 'required'
        ]);

        Language::where('id',$id)->update([
            'title' => $request->title,
            'level' => $request->level,
            'status' => $request->status,
            'edited_by' =>Auth::User()->email
        ]);

        return back()->with('alert-success',' Language Updated Successfully');

    }


    public function destroy($id){
        $Language = Language::where('id',$id)->first();
        $Language->delete();
        return back()->with('alert-success',' Language Deleted Successfully');
    }
}
