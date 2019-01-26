<?php

namespace App\Http\Controllers;

use App\TypeofCabinet;
use Illuminate\Http\Request;


class TypeofCabinetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = TypeofCabinet::all();
        return view('TypeOfCabinets.index')->with('types',$types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TypeOfCabinets.create');
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
            'Type' =>'required',
            'Description' =>'required',
        ));

        //create
        $types = new TypeofCabinet;
        $types['Type'] = $request ->get('Type');
        $types['Description'] = $request ->get('Description');
        $types->save();
        return redirect('/types');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $types = TypeofCabinet::find($id);
        return view('TypeOfCabinets.show', compact('types' ,'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = TypeofCabinet::find($id);
        return view('TypeOfCabinets.edit',compact('types' ,'id'));
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
            'Type' =>'required',
            'Description' =>'required',
        ));

        //create
        $types = new TypeofCabinet;
        $types['Type'] = $request ->get('Name');
        $types['Description'] = $request ->get('Description');
        $types->save();
        return redirect('/types');
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
