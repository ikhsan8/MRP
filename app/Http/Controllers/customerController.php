<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index()
    {
        $customer ['customer'] = Customer::all();
    	return view('customer.home', $customer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.form');
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
    		'customer_code' => ['required'],
            'customer_name' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'website' => ['nullable'],
            'description' => ['nullable'],
            'remarks' => ['nullable'],
            'others' => ['nullable'],
            
        ]);
        $customer = new Customer();
        $customer->customer_code = $request->input('suppliers_code'); 
        $customer->customer_name = $request->input('suppliers_name');
        $customer->address = $request->input('address');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->website = $request->input('website');
        $customer->description = $request->input('description');
        $customer->remarks = $request->input('remarks');
        $customer->others = $request->input('others');
        $customer->save();
        
        return redirect('customer')->with(['create' => 'Data saved successfully!']);
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
        $data['customers'] = Customer::findOrFail($id);
        // dd($departement);
        return view('customer.edit', $data);
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
            'customer_name' => ['required', "unique:customer,customer_name, $id"],
            ]);

        $customer = Customer::findOrFail($id);
        $customer->customer_name = $request->input('customer_name');
        $customer->address = $request->input('address') ?? "N/A";
        $customer->phone = $request->input('phone') ?? "N/A";
        $customer->email = $request->input('email') ?? "N/A";
        $customer->website = $request->input('website') ?? "N/A";
        $customer->description = $request->input('description') ?? "N/A";
        $customer->remarks = $request->input('remarks') ?? "N/A";
        $customer->others = $request->input('others') ?? "N/A";

        $customer->save();

        return redirect('customer')->with(['update' => 'Data updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yadi = Customer::findOrFail($id);
        $yadi->delete();
        
    return redirect('customer')->with(['delete' => 'Data delete successfully!']);
    }
}



