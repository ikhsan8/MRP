<?php

namespace App\Http\Controllers;
use App\Title;
use Illuminate\Http\Request;

class titleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ['title'] = Title::all();
    	return view('title.home', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('title.form');
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
    		'title_code' => ['required'],
            'title_name' => ['required'],
            'description' => ['nullable'],
            'remarks' => ['nullable'],
            'others' => ['nullable'],
            
        ]);
        $title = new Title();
        $title->title_code = $request->input('title_code'); 
        $title->title_name = $request->input('title_name');
        $title->description = $request->input('description');
        $title->remarks = $request->input('remarks');
        $title->others = $request->input('others');
        $title->save();
        
        return redirect('title')->with(['create' => 'Data saved successfully!']);
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
        $data['titles'] = Title::findOrFail($id);
        // dd($departement);
        return view('title.edit', $data);
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
            'title_name' => ['required', "unique:title,title_name, $id"],
            
        ]);
          
        $title = Title::findOrFail($id);
        $title->title_name = $request->input('title_name');
        $title->description = $request->input('description') ?? "N/A";
        $title->remarks = $request->input('remarks') ?? "N/A";
        $title->others = $request->input('others') ?? "N/A";

        $title->save();

        return redirect('title')->with(['update' => 'Data updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yadi = Title::findOrFail($id);
        $yadi->delete();
        
    return redirect('title')->with(['delete' => 'Data delete successfully!']);
    }
}
