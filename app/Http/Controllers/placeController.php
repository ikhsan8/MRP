<?php

namespace App\Http\Controllers;
use File;
use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class placeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $place ['place'] = Place::all();
    	return view('place.home', $place);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('place.form');
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
            'place_code' => ['required'],
    		'place_name' => ['required'],
    	]);
 
        $place = new Place();
        $place->place_code = $request->input('place_code'); 
        $place->place_name = $request->input('place_name');
        $place->description = $request->input('description');
        $place->remarks = $request->input('remarks');
        $place->other = $request->input('other');
        
        
        $place->save();
       
        
        return redirect('place')->with(['create' => 'Data saved successfully!']);
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
        $data['page_title'] = 'Edit place';
        $data['places'] = Place::findOrFail($id);
        // dd($departement);
        return view('place.edit', $data);
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
            'place_name' => ['required', "unique:place,place_name, $id"],
            
        ]);
          
        $place = Place::findOrFail($id);
        $place->place_name = $request->input('place_name');
        $place->description = $request->input('description') ?? "N/A";
        $place->remarks = $request->input('remarks') ?? "N/A";
        $place->other = $request->input('other') ?? "N/A";
        $place->save();

        return redirect('place')->with(['update' => 'Data updated successfully!']);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yadi = Place::findOrFail($id);
        $yadi->delete();
        
    return redirect('place')->with(['delete' => 'Data delete successfully!']);
    }
}
