<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageInfo = [
            'title'    => 'Admin | Education',
            'subTitle' => 'Education'
        ];

        $educations = Education::toBase()->get();

        return view('backend.pages.education.index', compact('pageInfo','educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageInfo = [
            'title'    => 'Education | Create',
            'subTitle' => 'Education Create'
        ];

        return view('backend.pages.education.create', compact('pageInfo'));
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
            'exam'         => 'required|string',
            'school'       => 'required|string',
            'passing_year' => 'required|integer',
            'gpa'          => 'nullable|string'
        ]);

        $result = Education::create($request->all());

        if($result){
            return redirect()->route('admin.education.index')->with('success', 'Data has been saved successfully');
        }else{
            return redirect()->route('admin.education.index')->with('error', 'Data can\'t be saved');
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
            'title'    => 'Education | Edit',
            'subTitle' => 'Education Edit'
        ];

        $education = Education::find($id);

        return view('backend.pages.education.edit',compact('pageInfo','education'));
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
            'exam'         => 'required|string',
            'school'       => 'required|string',
            'passing_year' => 'required|integer',
            'gpa'          => 'nullable|string'
        ]);

        $result = Education::find($id)->update($request->all());

        if($result){
            return redirect()->route('admin.education.index')->with('success', 'Data has been updated successfully');
        }else{
            return redirect()->route('admin.education.index')->with('error', 'Data can\'t be updated');
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
        $result = Education::find($id)->delete();

        if($result){
            return redirect()->route('admin.education.index')->with('success', 'Data has been deleted successfully');
        }else{
            return redirect()->route('admin.education.index')->with('error', 'Data can\'t be deleted');
        }
    }
}
