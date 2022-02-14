<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    

    public function index(){
     
        $services = Service::with(['users_addedby','users_editedby'])->orderBy('id','desc')->get();

     

        return view('admin.service.index',[
            'services' => $services
        ]);


        
    }

    public function create(){
        
        return view('admin.service.create');
    }


    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'status' => 'required'
        ]);

        $service = Service::create([
            'title' => $request->title,
            'status' => $request->status,
            'added_by' => Auth::User()->email
        ]);

        return back()->with('alert-success','Service Added Successfully');
    }


    public function edit($id){
        $service = Service::where('id',$id)->first();

        return view('admin.service.edit',[
            'service' => $service,
            
        ]);
    }


    public function update(Request $request,$id){

        $request->validate([
            'title' => 'required',
            'status' => 'required'
        ]);

        Service::where('id',$id)->update([
            'title' => $request->title,
            'status' => $request->status,
            'edited_by' =>Auth::User()->email
        ]);

        return back()->with('alert-success','Service Updated Successfully');

    }


    public function destroy($id){
        $service = Service::where('id',$id)->first();
        $service->delete();
        return back()->with('alert-success','Service Deleted Successfully');
    }




}
