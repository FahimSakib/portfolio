<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageInfo = [
            'title'    => 'Admin | Skill',
            'subTitle' => 'Skill'
        ];

        $skills = Skill::toBase()->get();

        return view('backend.pages.skill.index', compact('pageInfo','skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageInfo = [
            'title'    => 'Skill | Create',
            'subTitle' => 'Skill Create'
        ];

        return view('backend.pages.skill.create', compact('pageInfo'));
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
            'title'      => 'required|string',
            'percentage' => 'required|integer',
        ]);

        $result = Skill::create($request->all());

        if($result){
            return redirect()->route('admin.skill.index')->with('success', 'Data has been saved successfully');
        }else{
            return redirect()->route('admin.skill.index')->with('error', 'Data can\'t be saved');
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
            'title'    => 'Skill | Edit',
            'subTitle' => 'Skill Edit'
        ];

        $skill = Skill::find($id);

        return view('backend.pages.skill.edit',compact('pageInfo','skill'));
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
            'title'      => 'required|string',
            'percentage' => 'required|integer',
        ]);

        $result = Skill::find($id)->update($request->all());

        if($result){
            return redirect()->route('admin.skill.index')->with('success', 'Data has been updated successfully');
        }else{
            return redirect()->route('admin.skill.index')->with('error', 'Data can\'t be updated');
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
        $result = Skill::find($id)->delete();

        if($result){
            return redirect()->route('admin.skill.index')->with('success', 'Data has been deleted successfully');
        }else{
            return redirect()->route('admin.skill.index')->with('error', 'Data can\'t be deleted');
        }
    }
}
