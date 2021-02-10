<?php

namespace App\Http\Controllers;
use File;
use App\Countermeasure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class countermeasureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countermeasure ['countermeasure'] = Countermeasure::all();
    	return view('countermeasure.home', $countermeasure);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countermeasure.form');
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
            'countermeasure_code' => ['required'],
    		'countermeasure_name' => ['required'],
    	]);
 
        $countermeasure = new Countermeasure();
        $countermeasure->countermeasure_code = $request->input('countermeasure_code'); 
        $countermeasure->countermeasure_name = $request->input('countermeasure_name');
        $countermeasure->description = $request->input('description');
        $countermeasure->remarks = $request->input('remarks');
        $countermeasure->other = $request->input('other');


        
        
        $countermeasure->save();
       
        
        return redirect('countermeasure')->with(['create' => 'Data saved successfully!']);
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
        $data['page_title'] = 'Edit countermeasure';
        $data['countermeasures'] = Countermeasure::findOrFail($id);
        // dd($departement);
        return view('countermeasure.edit', $data);
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
            'countermeasure_name' => ['required', "unique:countermeasure,countermeasure_name, $id"],
            
        ]);
          
        $countermeasure = Countermeasure::findOrFail($id);
        $countermeasure->countermeasure_name = $request->input('countermeasure_name');
        $countermeasure->description = $request->input('description') ?? "N/A";
        $countermeasure->remarks = $request->input('remarks') ?? "N/A";
        $countermeasure->other = $request->input('other') ?? "N/A";
        $countermeasure->save();

        return redirect('countermeasure')->with(['update' => 'Data updated successfully!']);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yadi = Countermeasure::findOrFail($id);
        $yadi->delete();
        
    return redirect('countermeasure')->with(['delete' => 'Data delete successfully!']);
    }
}
