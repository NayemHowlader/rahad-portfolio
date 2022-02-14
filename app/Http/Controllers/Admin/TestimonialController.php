<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
      
    public function index(){
     
        $testimonials = Testimonial::with(['users_addedby','users_editedby'])->orderBy('id','desc')->get() ;

     

        return view('admin.testimonial.index',[
            'testimonials' => $testimonials
        ]);


        
    }


    public function create(){
        
        return view('admin.testimonial.create');
    }


    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'desination' => 'required',
            'details' => 'required',
            'status' => 'required'
        ]);

        Testimonial::create([
            'name' => $request->name,
            'desination' => $request->desination,
            'details' => $request->details,
            'status' => $request->status,
            'added_by' => Auth::User()->email
        ]);

        return back()->with('alert-success','Testimonial Added Successfully');
    }


    public function edit($id){
        $testimonial = Testimonial::where('id',$id)->first();

        return view('admin.testimonial.edit',[
            'testimonial' => $testimonial,
            
        ]);
    }


    public function update(Request $request,$id){

        $request->validate([
            'name' => 'required',
            'desination' => 'required',
            'details' => 'required',
            'status' => 'required'
        ]);

        Testimonial::where('id',$id)->update([
            'name' => $request->name,
            'desination' => $request->desination,
            'details' => $request->details,
            'status' => $request->status,
            'edited_by' =>Auth::User()->email
        ]);

        return back()->with('alert-success','Testimonial Updated Successfully');

    }


    public function destroy($id){
        $testimonial = Testimonial::where('id',$id)->first();
        $testimonial->delete();
        return back()->with('alert-success','Testimonial Deleted Successfully');
    }

}
