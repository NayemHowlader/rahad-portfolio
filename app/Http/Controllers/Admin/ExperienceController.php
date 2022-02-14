<?php

namespace App\Http\Controllers\Admin;

use App\Experience;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    
      
    public function index(){
     
        $experiences = Experience::with(['users_addedby','users_editedby'])->orderBy('id','desc')->get();

     

        return view('admin.about.experience.index',[
            'experiences' => $experiences
        ]);


        
    }


    public function create(){
        
        return view('admin.about.experience.create');
    }


    public function store(Request $request){
        $request->validate([
            'institute' => 'required|string|min:3|max:50',
            'position' => 'required|string|min:2|max:30',
            'year' => 'required|string|min:3|max:30',
            'status' => 'required'
        ]);

        $experiences = Experience::create([
            'institute' => $request->institute,
            'position' => $request->position,
            'year' => $request->year,
            'status' => $request->status,
            'added_by' => Auth::User()->email
        ]);

        return back()->with('alert-success','Experience Added Successfully');
    }


    public function edit($id){
        $experience = Experience::where('id',$id)->first();

        return view('admin.about.experience.edit',[
            'experience' => $experience,
            
        ]);
    }


    public function update(Request $request,$id){

        $request->validate([
            'institute' => 'required|string|min:3|max:50',
            'position' => 'required|string|min:2|max:30',
            'year' => 'required|string|min:3|max:30',
            'status' => 'required',
        ]);

        Experience::where('id',$id)->update([
            'institute' => $request->institute,
            'position' => $request->position,
            'year' => $request->year,
            'status' => $request->status,
            'edited_by' =>Auth::User()->email
        ]);

        return back()->with('alert-success','Experience Updated Successfully');

    }


    public function destroy($id){
        $experience = Experience::where('id',$id)->first();
        $experience->delete();
        return back()->with('alert-success','Experience Deleted Successfully');
    }
}
