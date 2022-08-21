<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
