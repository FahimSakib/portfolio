<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        $pageInfo = [
            'title'    => 'Admin | Dashboard',
            'subTitle' => 'Dashboard'
        ];

        return view('backend.pages.dashboard.dashboard',compact('pageInfo'));
    }

    public function adminLogout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.dashboard');
    }
}
