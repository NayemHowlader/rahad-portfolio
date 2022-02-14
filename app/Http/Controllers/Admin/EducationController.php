<?php

namespace App\Http\Controllers\Admin;

use App\Education;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    
     
    public function index(){
     
        $educations = Education::with(['users_addedby','users_editedby'])->orderBy('id','desc')->get();

     

        return view('admin.about.education.index',[
            'educations' => $educations
        ]);


        
    }


    public function create(){
        
        return view('admin.about.education.create');
    }


    public function store(Request $request){
        $request->validate([
            'institute' => 'required|string|min:3|max:50',
            'degree' => 'required|string|min:3|max:50',
            'year' => 'required|string|min:3|max:30',
            'status' => 'required'
        ]);

        $educations = Education::create([
            'institute' => $request->institute,
            'degree' => $request->degree,
            'year' => $request->year,
            'status' => $request->status,
            'added_by' => Auth::User()->email
        ]);

        return back()->with('alert-success','Education Added Successfully');
    }


    public function edit($id){
        $education = Education::where('id',$id)->first();

        return view('admin.about.education.edit',[
            'education' => $education,
            
        ]);
    }


    public function update(Request $request,$id){

        $request->validate([
            'institute' => 'required|string|min:3|max:50',
            'degree' => 'required|string|min:3|max:50',
            'year' => 'required|string|min:3|max:30',
            'status' => 'required',
        ]);

        Education::where('id',$id)->update([
            'institute' => $request->institute,
            'degree' => $request->degree,
            'year' => $request->year,
            'status' => $request->status,
            'edited_by' =>Auth::User()->email
        ]);

        return back()->with('alert-success','Education Updated Successfully');

    }


    public function destroy($id){
        $education = Education::where('id',$id)->first();
        $education->delete();
        return back()->with('alert-success','Education Deleted Successfully');
    }
}
