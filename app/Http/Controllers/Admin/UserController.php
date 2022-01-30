<?php

namespace App\Http\Controllers\Admin;

use App\AdminProfile;
use App\Http\Controllers\Controller;
use App\Mail\RoleStatusMail;
use App\Mail\VerifyUserMail;
use App\User;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        $userTrashLists = User::onlyTrashed()->get();
        return view('admin.user.index',[
            'users' => $users,
            'userTrashLists' => $userTrashLists,
        ]);
    }

    public function create(){
        return view('admin.user.create');
    }


    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            // 'image' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'min:8|required|confirmed',
            'role' => 'required',
            'status' => 'required',
        ]);

        $users = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => $request->status,

        ]);
        AdminProfile::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'status' => $request->status,
            'created_by' => Auth::user()->email,
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = $request->name.'_'.$users->id.'.'.$image->getClientOriginalExtension();
            $destination = public_path('photo/profile/');
            $image->move($destination,$name);
            AdminProfile::where('email',$users->email)->update([
                'image' => $name
            ]);
        }

        VerifyUser::create([
            'token' => Str::random(60),
            'user_id' => $users->id,
        ]);

        Mail::to($request->email)->send(new VerifyUserMail($users));
        return back()->with('alert-success','User Added Successfully');
    }

    public function edit($id){
        $user = User::where('id',$id)->first();
        return view('admin.user.edit',[
            'user' =>$user
        ]);
    }

    public function update(Request $request , $id){
        $user = User::where('id',$id)->first();
        User::where('id',$id)->update([
             'role' => $request->role,
             'status' => $request->status,
         ]);
         AdminProfile::where('email',$user->email)->update([
            'role' => $request->role,
            'status' => $request->status,
         ]);

         Mail::to($user->email)->send(new RoleStatusMail($user));
         return back()->with('alert-success','User update Successfully');

    }

    public function delete($id){
        $user = User::where('id',$id)->first();
        User::where('id',$id)->delete();
        AdminProfile::where('email',$user->email)->delete();
        return back()->with('alert-success','User Delete Successfully');
    }

    public function emailValidate(){

        $emailValidate = request()->get('emailValidate');
        $userEmail = User::where('email',$emailValidate)->first();
        if($userEmail){
           return response()->json([
            'message' => 'Invalid'
           ],200);
        }else{
            return response()->json([
                'message' => 'Valid'
               ],200);
        }

    }


    // user restore
    public function trashRestore($email){
        User::onlyTrashed()->where('email',$email)->restore();
        AdminProfile::onlyTrashed()->where('email',$email)->restore();
        return back()->with('success','User Restore Successfully');
    }
    
    public function parmanentDelete($email){
        $userPermanentDelete = User::onlyTrashed()->where('email',$email)->first();
        $userProfilePermanentDelete = AdminProfile::onlyTrashed()->where('email',$userPermanentDelete->email)->first();
        $oldPhotoName = $userProfilePermanentDelete->image;
           if($oldPhotoName != 'default.png'){
                $oldPhotoPath = public_path('photo/profile/').$oldPhotoName;
                    unlink($oldPhotoPath);
           }

            $userPermanentDelete->forceDelete();
            $userProfilePermanentDelete->forceDelete();
            return back()->with('danger','User Parmanent Delete Successfully');
    }

}
