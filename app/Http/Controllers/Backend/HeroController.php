<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use App\Traits\UploadAble;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    use UploadAble;

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

        if($request->hasFile('cover')){
            $collect = collect($request->all())->except('cover');
            $cover   = $this->upload_file($request->cover,'hero_section');
            $collect = collect($collect)->merge(compact('cover'));

            $result  = HeroSection::create($collect->toArray());
        }

        if($result){
            return redirect()->route('admin.hero.index')->with('success', 'Data has been saved successfully');
        }else{
            return redirect()->route('admin.hero.index')->with('error', 'Data can\'t be saved');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hero = HeroSection::find($id);
        return view('backend.pages.hero-section.edit',compact('hero'));
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
        $request->validate([
            'brandName' => 'required|string',
            'brandText' => 'required|string',
            'mobile'    => 'required',
            'email'     => 'required|email',
            'welcome'   => 'required|string',
            'name'      => 'required|string',
            'cover'     => 'nullable|mimes:jpg,jpeg,png'
        ]);
        // dd($request->all());

        if($request->hasFile('cover')){
            if(!empty($request->oldCover)){
                $this->delete_file($request->oldCover,'hero_section');
            }
            $collect = collect($request->all())->except(['cover','oldCover']);
            $cover   = $this->upload_file($request->cover,'hero_section');
            $collect = collect($collect)->merge(compact('cover'));
            $result  = HeroSection::find($id)->update($collect->toArray());
        }else{
            $collect = collect($request->all())->except(['cover','oldCover']);
            $cover   = $request->oldCover;
            $collect = collect($collect)->merge(compact('cover'));
            $result  = HeroSection::find($id)->update($collect->toArray());
        }

        if($result){
            return redirect()->route('admin.hero.index')->with('success', 'Data has been updated successfully');
        }else{
            return redirect()->route('admin.hero.index')->with('error', 'Data can\'t be updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hero = HeroSection::find($id);
        
        if($hero){
            $this->delete_file($hero->cover,'hero_section');
            $result = $hero->delete();
        }

        if($result){
            return redirect()->route('admin.hero.index')->with('success', 'Data has been deleted successfully');
        }else{
            return redirect()->route('admin.hero.index')->with('error', 'Data can\'t be deleted');
        }
    }
}
