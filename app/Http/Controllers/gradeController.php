<?php

namespace App\Http\Controllers;
use App\Grade;
use Illuminate\Http\Request;

class gradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grade ['grade'] = Grade::all();
    	return view('grade.home', $grade);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grade.form');
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
    		'grade_code' => ['required'],
            'grade_name' => ['required'],
            'description' => ['nullable'],
            'remarks' => ['nullable'],
            'others' => ['nullable'],
            
        ]);
        $grade = new Grade();
        $grade->grade_code = $request->input('grade_code'); 
        $grade->grade_name = $request->input('grade_name');
        $grade->description = $request->input('description');
        $grade->remarks = $request->input('remarks');
        $grade->others = $request->input('others');
        $grade->save();
        
        return redirect('grade')->with(['create' => 'Data saved successfully!']);
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
        $data['grades'] = Grade::findOrFail($id);
        // dd($departement);
        return view('grade.edit', $data);
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
            'grade_name' => ['required', "unique:grade,grade_name, $id"],
            
        ]);
          
        $grade = Grade::findOrFail($id);
        $grade->grade_name = $request->input('grade_name');
        $grade->description = $request->input('description') ?? "N/A";
        $grade->remarks = $request->input('remarks') ?? "N/A";
        $grade->others = $request->input('others') ?? "N/A";

        $grade->save();

        return redirect('grade')->with(['update' => 'Data updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yadi = Grade::findOrFail($id);
        $yadi->delete();
        
    return redirect('grade')->with(['delete' => 'Data delete successfully!']);
    }
}
