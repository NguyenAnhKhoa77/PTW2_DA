<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ControllerMailbox extends Controller
{
    public function mailbox()
    {
        $mails = Contact::all();
        $users = User::all();
        return view('backend.mailbox.mailbox',compact('mails','users'));
    }
    
    public function readmail($id)
    {
        $mails = Contact::find($id);
        $user = User::find($mails->user_id);
        return view('backend.mailbox.read-mail',compact('mails','user'));
    }
    
}
