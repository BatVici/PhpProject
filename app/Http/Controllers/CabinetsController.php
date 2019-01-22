<?php

namespace App\Http\Controllers;

use App\Cabinet;
use Illuminate\Http\Request;

class CabinetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cabinets = Cabinet::all();
       return view('Cabinets.index')->with('cabinets',$cabinets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cabinets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request,array(
            'Number' =>'required',
            'Capacity' =>'required',
            'Type' =>'required',
            'Available' =>'required'
        ));

        //create
        $cabinets = new Cabinet;
        $cabinets['Number'] = $request ->get('Number');
        $cabinets['Capacity'] = $request ->get('Capacity');
        $cabinets['Type'] = $request ->get('Type');
        $cabinets['Available'] = $request ->get('Available');
        $cabinets->save();
        return redirect('/cabinets');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cabinet = Cabinet::find($id);
        return view('Cabinets.show', compact('cabinet' ,'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cabinet = Cabinet::find($id);
        return view('Cabinets.edit',compact('cabinet' ,'id'));
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
        //validation
        $this->validate($request,array(
            'Number' =>'required',
            'Capacity' =>'required',
            'Type' =>'required',
            'Available' =>'required'
        ));

        //create
        $cabinets = Cabinet::find($id);
        $cabinets['Number'] = $request ->get('Number');
        $cabinets['Capacity'] = $request ->get('Capacity');
        $cabinets['Type'] = $request ->get('Type');
        $cabinets['Available'] = $request ->get('Available');
        $cabinets->save();
        return redirect('/cabinets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
