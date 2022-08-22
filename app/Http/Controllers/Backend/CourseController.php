<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageInfo = [
            'title'    => 'Admin | Course',
            'subTitle' => 'Course'
        ];

        $courses = Course::toBase()->get();

        return view('backend.pages.courses.index', compact('pageInfo','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageInfo = [
            'title'    => 'Course | Create',
            'subTitle' => 'Course Create'
        ];

        return view('backend.pages.courses.create', compact('pageInfo'));
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
            'title'     => 'required|string',
            'institute' => 'required|string',
            'duration'  => 'required|integer',
            'org'       => 'nullable|string'
        ]);

        $result = Course::create($request->all());

        if($result){
            return redirect()->route('admin.course.index')->with('success', 'Data has been saved successfully');
        }else{
            return redirect()->route('admin.course.index')->with('error', 'Data can\'t be saved');
        }
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
        $result = Course::find($id)->delete();

        if($result){
            return redirect()->route('admin.course.index')->with('success', 'Data has been deleted successfully');
        }else{
            return redirect()->route('admin.course.index')->with('error', 'Data can\'t be deleted');
        }
    }
}
