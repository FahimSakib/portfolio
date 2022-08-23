<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'subject' => 'nullable|string',
            'msg'     => 'required|string'
        ]);

        $result = Contact::create($request->all());

        if($result){
            return redirect()->route('frontend.index')->with('success', 'Message has been sent successfully');
        }else{
            return redirect()->route('frontend.index')->with('error', 'Message cannot be sent');
        }
    }
}
