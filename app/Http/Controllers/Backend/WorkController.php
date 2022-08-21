<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageInfo = [
            'title'    => 'Admin | Work',
            'subTitle' => 'Work'
        ];

        $work = Work::get();

        return view('backend.pages.work.index', compact('pageInfo','work'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageInfo = [
            'title'    => 'Work | Create',
            'subTitle' => 'Work Create'
        ];

        return view('backend.pages.work.create', compact('pageInfo'));
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
            'experience' => 'required|integer',
            'heading'    => 'required|string',
            'details'    => 'required|string'
        ]);

        $result = Work::create($request->all());

        if($result){
            return redirect()->route('admin.work.index')->with('success', 'Data has been saved successfully');
        }else{
            return redirect()->route('admin.work.index')->with('error', 'Data can\'t be saved');
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
        $pageInfo = [
            'title'    => 'Work | Edit',
            'subTitle' => 'Work Edit'
        ];

        $work = Work::find($id);
        return view('backend.pages.work.edit',compact('pageInfo','work'));
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
            'experience' => 'required|integer',
            'heading'    => 'required|string',
            'details'    => 'required|string'
        ]);
        
        $result = Work::find($id)->update($request->all());

        if($result){
            return redirect()->route('admin.work.index')->with('success', 'Data has been updated successfully');
        }else{
            return redirect()->route('admin.work.index')->with('error', 'Data can\'t be updated');
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
        $result = Work::find($id)->delete();

        if($result){
            return redirect()->route('admin.work.index')->with('success', 'Data has been deleted successfully');
        }else{
            return redirect()->route('admin.work.index')->with('error', 'Data can\'t be deleted');
        }
    }
}
