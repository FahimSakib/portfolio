<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageInfo = [
            'title'    => 'Admin | Project',
            'subTitle' => 'Project'
        ];

        $projects = Project::toBase()->get();

        return view('backend.pages.project.index', compact('pageInfo','projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageInfo = [
            'title'    => 'Project | Create',
            'subTitle' => 'Project Create'
        ];

        return view('backend.pages.project.create', compact('pageInfo'));
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
            'name' => 'required|string',
            'type' => 'required|string',
            'url'  => 'required|string',
        ]);

        $result = Project::create($request->all());

        if($result){
            return redirect()->route('admin.project.index')->with('success', 'Data has been saved successfully');
        }else{
            return redirect()->route('admin.project.index')->with('error', 'Data can\'t be saved');
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
            'title'    => 'Project | Edit',
            'subTitle' => 'Project Edit'
        ];

        $project = Project::find($id);

        return view('backend.pages.project.edit',compact('pageInfo','project'));
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
            'name' => 'required|string',
            'type' => 'required|string',
            'url'  => 'required|string',
        ]);

        $result = Project::find($id)->update($request->all());

        if($result){
            return redirect()->route('admin.project.index')->with('success', 'Data has been updated successfully');
        }else{
            return redirect()->route('admin.project.index')->with('error', 'Data can\'t be updated');
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
        $result = Project::find($id)->delete();

        if($result){
            return redirect()->route('admin.project.index')->with('success', 'Data has been deleted successfully');
        }else{
            return redirect()->route('admin.project.index')->with('error', 'Data can\'t be deleted');
        }
    }
}
