<?php

namespace App\Http\Controllers\Admin;

use App\AdminProfile;
use App\Http\Controllers\Controller;
use App\Mail\VerifyUserMail;
use App\User;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function index(){
        return view('admin.profile.index');
    }

    public function profileUpdate(Request $request,$id){
        $user = User::where('id',Auth::user()->id)->first();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        if($request->email != Auth::user()->email){
            $request->validate([
                'email' => 'required|unique:users,email',
            ]);
            User::findOrFail(Auth::user()->id)->update([
                'email' => $request->email,
                'email_verified_at' => null,
            ]);
            VerifyUser::create([
                'token' => Str::random(60),
                'user_id' => Auth::user()->id,
            ]);
            Mail::to($request->email)->send(new VerifyUserMail($user));

        }
        // $user = User::where('id',Auth::user()->id)->first();
        AdminProfile::where('email',$user->email)->update([
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        if ($request->hasFile('image')) {
            //old photo delete if it is not default photo
            $old_photo_name = Auth::user()->adminProfile->image;
            if($old_photo_name != 'default.png'){
                $old_photo_location = public_path('photo/profile/').$old_photo_name;
                unlink($old_photo_location);
            }
            //photo update
            $image = $request->file('image');
            $name = Auth::User()->adminProfile->name.'_'.Auth::User()->id.".".$image->getClientOriginalExtension();
            $destination = public_path('photo/profile/');
            $image->move($destination,$name);
            AdminProfile::where('email',Auth::User()->email)->update([
                'image' => $name,
            ]);

        }

        if($request->email != Auth::user()->email){
            Auth::logout();
        }
        // VerifyUser::create([
        //     'token' => Str::random(60),
        //     'user_id' => Auth::user()->id,
        // ]);
        // Mail::to($request->email)->send(new VerifyUserMail($user));

        return back()->with('alert-success','Profile Update Successfully');

    }

    public function update_password(Request $request , $id){
        $request->validate([
            'previous_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if(Hash::check($request->previous_password, Auth::user()->password)){
            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),

            ]);
            return back()->with('alert-success','Password Change Successfully');
        }
        return back()->with('alert-danger','Password does not match with previous Password');
    }


}
