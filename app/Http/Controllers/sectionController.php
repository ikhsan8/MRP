<?php

namespace App\Http\Controllers;
use App\Section;
use Illuminate\Http\Request;

class sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section ['section'] = Section::all();
    	return view('section.home', $section);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('section.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'section_code' => ['required'],
            'section_name' => ['required'],
            'description' => ['nullable'],
            'remarks' => ['nullable'],
            'others' => ['nullable'],
            
        ]);
        $section = new Section();
        $section->section_code = $request->input('section_code'); 
        $section->section_name = $request->input('section_name');
        $section->description = $request->input('description');
        $section->remarks = $request->input('remarks');
        $section->others = $request->input('others');
        $section->save();
        
        return redirect('section')->with(['create' => 'Data saved successfully!']);
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
        $data['sections'] = Section::findOrFail($id);
        // dd($departement);
        return view('section.edit', $data);
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
            'section_name' => ['required', "unique:section,section_name, $id"],
            
        ]);
          
        $section = Section::findOrFail($id);
        $section->section_name = $request->input('section_name');
        $section->description = $request->input('description') ?? "N/A";
        $section->remarks = $request->input('remarks') ?? "N/A";
        $section->others = $request->input('others') ?? "N/A";

        $section->save();

        return redirect('section')->with(['update' => 'Data updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yadi = Section::findOrFail($id);
        $yadi->delete();
        
    return redirect('section')->with(['delete' => 'Data delete successfully!']);
    }
}
