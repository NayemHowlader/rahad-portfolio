<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Mail\ContactReplyMail;
use App\Mail\VerifyUserMail;
use App\MessageReplay;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReplayMessageController extends Controller
{
    

    
    public function index($id){
        
        $contact = Contact::where('id',$id)->first();
        return view('admin.contact.replay',[
            'contact' => $contact,
            
        ]);
    }


    public function store(Request $request){
    
        $request->validate([
            'message_id' => 'required',
            'email' => 'required',
            'replay' => 'required'
        ]);

     


        $replay = MessageReplay::create([
            'message_id' => $request->message_id,
            'email' => $request->email,
            'replay' => $request->replay,
            'created_by' => Auth::User()->email
        ]);
        Mail::to($replay->email)->send(new ContactReplyMail($replay));
        Contact::where('id',$replay->message_id)->update([
            'status' => '3'
        ]);
    
        return back()->with('alert-success','Message replay Successfully');
    }


}
