<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $pageInfo = [
            'title'    => 'Admin | Contact',
            'subTitle' => 'Contact'
        ];

        $contacts = Contact::toBase()->get();

        return view('backend.pages.contact.index', compact('pageInfo','contacts'));
    }

    public function delete($id)
    {
        $result = Contact::find($id)->delete();

        if($result){
            return redirect()->route('admin.contact.index')->with('success', 'Data has been deleted successfully');
        }else{
            return redirect()->route('admin.contact.index')->with('error', 'Data can\'t be deleted');
        }
    }
     
}
