<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageInfo = [
            'title'    => 'Admin | Hero Section',
            'subTitle' => 'Hero Section'
        ];

        $hero = HeroSection::get();

        return view('backend.pages.hero-section.index', compact('pageInfo','hero'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageInfo = [
            'title'    => 'Hero Section | Create',
            'subTitle' => 'Hero Section Create'
        ];

        return view('backend.pages.hero-section.create', compact('pageInfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brandName' => 'required|string',
            'brandText' => 'required|string',
            'mobile'    => 'required',
            'email'     => 'required|email',
            'welcome'   => 'required|string',
            'name'      => 'required|string',
            'cover'     => 'required|mimes:jpg,jpeg,png'
        ]);
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}