<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requirment1;

class RequirmentController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requirments=Requirment::all()->toArray();
            return view('requirment1.index',compact('requirments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */










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

        $requirment =Requirment::find($id);
        return view('requirment1.edit',compact('requirments','id'));

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
        $this->validate($request,[
            'Jobtitle' =>'required',
            'Location' =>'required',
            'Jobdesc' =>'required',
            'Companyrate' =>'required',
            'Canrate' =>'required',
            'Recname' =>'required'

           ]);

           $requirment =Requirment::find($id);
           $requirment->Jobtitle=$request->get('Jobtitle');
           $requirment->Location=$request->get('Location');
           $requirment->Jobdesc=$request->get('Jobdesc');
           $requirment->Companyrate=$request->get('Companyrate');
           $requirment->Canrate=$request->get('Canrate');
           $requirment->Recname=$request->get('Recname');

           $requirment->save();

           return redirect()->route('requirment1.index')->with('Data Updated','Success');


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
