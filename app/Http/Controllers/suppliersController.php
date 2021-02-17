<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class suppliersController extends Controller
{
    public function index()
    {
        $suppliers ['suppliers'] = Suppliers::all();
    	return view('suppliers.home', $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.form');
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
    		'suppliers_code' => ['required'],
            'suppliers_name' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'website' => ['nullable'],
            'description' => ['nullable'],
            'remarks' => ['nullable'],
            'others' => ['nullable'],
            
        ]);
        $suppliers = new Departement();
        $suppliers->suppliers_code = $request->input('suppliers_code'); 
        $suppliers->suppliers_name = $request->input('suppliers_name');
        $suppliers->address = $request->input('address');
        $suppliers->phone = $request->input('phone');
        $suppliers->email = $request->input('email');
        $suppliers->website = $request->input('website');
        $suppliers->description = $request->input('description');
        $suppliers->remarks = $request->input('remarks');
        $suppliers->others = $request->input('others');
        $suppliers->save();
        
        return redirect('suppliers')->with(['create' => 'Data saved successfully!']);
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
        $data['supplierss'] = Suppliers::findOrFail($id);
        // dd($departement);
        return view('suppliers.edit', $data);
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
            'suppliers_name' => ['required', "unique:suppliers,suppliers_name, $id"],
            
        ]);
          
        $suppliers = Suppliers::findOrFail($id);
        $suppliers->suppliers_name = $request->input('suppliers_name');
        $suppliers->address = $request->input('address') ?? "N/A";
        $suppliers->phone = $request->input('phone') ?? "N/A";
        $suppliers->email = $request->input('email') ?? "N/A";
        $suppliers->website = $request->input('website') ?? "N/A";
        $suppliers->description = $request->input('description') ?? "N/A";
        $suppliers->remarks = $request->input('remarks') ?? "N/A";
        $suppliers->others = $request->input('others') ?? "N/A";

        $suppliers->save();

        return redirect('suppliers')->with(['update' => 'Data updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yadi = Suppliers::findOrFail($id);
        $yadi->delete();
        
    return redirect('suppliers')->with(['delete' => 'Data delete successfully!']);
    }
}

