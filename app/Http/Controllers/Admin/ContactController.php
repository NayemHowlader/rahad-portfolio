<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    
    public function index(){
       
        $contacts = DB::table('contacts')->orderBy('id','desc')->get();


       

        return view('admin.contact.index',[
            'contacts' => $contacts
        ]);
    }


    public function view($id){
        $contact = Contact::where('id',$id)->first();
        Contact::where('id',$id)->update([
            'status' => '2'
        ]);

        return view('admin.contact.view',[
            'contact' => $contact,
            
        ]);
    }


    public function destroy($id){
        $contact = Contact::where('id',$id)->first();
        $contact->delete();
        return back()->with('alert-success','Contact Deleted Successfully');
    }


}
