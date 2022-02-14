<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{
    public function index(){
     
        $partners = Partner::with(['users_addedby','users_editedby'])->orderBy('id','desc')->get();

     

        return view('admin.partner.index',[
            'partners' => $partners
        ]);  
        
    }


    public function create(){
        
        return view('admin.partner.create');
    }


    public function store(Request $request){
        $request->validate([
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = '';
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('photo/partner'), $imageName);
        }

        $data = new Partner();
        $data->status = $request->status;
        $data->image = $imageName;
        $data->added_by = Auth::User()->email;
        $data->save();

        return back()->with('alert-success','Partner Added Successfully');
    }


    public function edit($id){
        $partner = Partner::where('id',$id)->first();

        return view('admin.partner.edit',[
            'partner' => $partner,
            
        ]);
    }


    public function update(Request $request,$id){

        $request->validate([
            'status' => 'required',
        ]);

        Partner::where('id',$id)->update([
            'status' => $request->status,
        ]);

        $partner = Partner::where('id',$id)->first();
        if ($request->hasFile('image')) {

            //old photo delete if it is not default photo
            $old_photo_name = $partner->image;
            if($old_photo_name != 'default.png'){
                $old_photo_location = public_path('photo/partner/').$old_photo_name;
                unlink($old_photo_location);
            }
            //photo update
            $image = $request->file('image');
            $name = $request->id.".".$image->getClientOriginalExtension();
            $destination = public_path('photo/partner/');
            $image->move($destination,$name);
            Partner::where('id',$id)->update([
                'image' => $name,
            ]);

        }
        return back()->with('alert-success','Partner Updated Successfully');

    }




    public function destroy($id){
        $partner = Partner::where('id',$id)->first();
            // delete image
            $oldImage = $partner->image;
            $oldImageLocation = public_path('photo/partner/').$oldImage;
            unlink($oldImageLocation);
            $partner->delete();
        return back()->with('alert-success','Partner Deleted Successfully');
    }




}
