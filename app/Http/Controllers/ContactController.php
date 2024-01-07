<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function add(Request $request){
        $input = $request->validate([
            'name'=> 'required',
            'email'=>'required',
            'message'=>'required'
        ]);

        if(Contact::create($input)){
            return view('guest.contactUs')->with('add_success','Message sent');
        }else{
            return view('guest.contactUs')->with('add_fail','Failed');
        }
    }


public function showMessages()
{

    $messages = Contact::all();

    return  view('admin.message', compact('messages'));
}
}
