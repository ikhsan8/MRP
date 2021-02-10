<?php

namespace App\Http\Controllers;
use App\Departement;
use Illuminate\Http\Request;

class departementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departement ['departement'] = Departement::all();
    	return view('departement.home', $departement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departement.form');
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
    		'departement_code' => ['required'],
            'departement_name' => ['required'],
            'description' => ['nullable'],
            'remarks' => ['nullable'],
            'others' => ['nullable'],
            
        ]);
        $departement = new Departement();
        $departement->departement_code = $request->input('departement_code'); 
        $departement->departement_name = $request->input('departement_name');
        $departement->description = $request->input('description');
        $departement->remarks = $request->input('remarks');
        $departement->others = $request->input('others');
        $departement->save();
        
        return redirect('departement')->with(['create' => 'Data saved successfully!']);
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
        $data['departements'] = Departement::findOrFail($id);
        // dd($departement);
        return view('departement.edit', $data);
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
            'departement_name' => ['required', "unique:departement,departement_name, $id"],
            
        ]);
          
        $departement = Departement::findOrFail($id);
        $departement->departement_name = $request->input('departement_name');
        $departement->description = $request->input('description') ?? "N/A";
        $departement->remarks = $request->input('remarks') ?? "N/A";
        $departement->others = $request->input('others') ?? "N/A";

        $departement->save();

        return redirect('departement')->with(['update' => 'Data updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yadi = Departement::findOrFail($id);
        $yadi->delete();
        
    return redirect('departement')->with(['delete' => 'Data delete successfully!']);
    }
}
