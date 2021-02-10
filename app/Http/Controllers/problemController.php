<?php

namespace App\Http\Controllers;
use File;
use App\Problem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class problemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problem ['problem'] = Problem::all();
    	return view('problem.home', $problem);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('problem.form');
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
            'problem_code' => ['required'],
    		'problem_name' => ['required'],
    	]);
 
        $problem = new Problem();
        $problem->problem_code = $request->input('problem_code'); 
        $problem->problem_name = $request->input('problem_name');
        $problem->description = $request->input('description');
        $problem->remarks = $request->input('remarks');
        $problem->other = $request->input('other');


        
        
        $problem->save();
       
        
        return redirect('problem')->with(['create' => 'Data saved successfully!']);
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
        $data['page_title'] = 'Edit problem';
        $data['problems'] = Problem::findOrFail($id);
        // dd($departement);
        return view('problem.edit', $data);
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
        $request->validate([
            'problem_name' => ['required', "unique:problem,problem_name, $id"],
            
        ]);
          
        $problem = Problem::findOrFail($id);
        $problem->problem_name = $request->input('problem_name');
        $problem->description = $request->input('description') ?? "N/A";
        $problem->remarks = $request->input('remarks') ?? "N/A";
        $problem->other = $request->input('other') ?? "N/A";
        $problem->save();

        return redirect('problem')->with(['update' => 'Data updated successfully!']);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yadi = Problem::findOrFail($id);
        $yadi->delete();
        
    return redirect('problem')->with(['delete' => 'Data delete successfully!']);
    }
}
