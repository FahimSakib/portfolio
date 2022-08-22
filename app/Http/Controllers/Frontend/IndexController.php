<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // $users = User::toBase()->get();
    public function index()
    {
        return view('frontend.index');
    }
}
