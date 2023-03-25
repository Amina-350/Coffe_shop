<?php

namespace App\Http\Controllers;

use App\Models\Cafee;
use Illuminate\Http\Request;
use DB;
use Redirect;

class CafeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cafee  $cafee
     * @return \Illuminate\Http\Response
     */
    public function show(Cafee $cafee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cafee  $cafee
     * @return \Illuminate\Http\Response
     */
    public function edit(Cafee $cafee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cafee  $cafee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cafee $cafee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cafee  $cafee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cafee $cafee)
    {
       
    }
    public function insertData(Request $req){
        $basic=new Cafee;
        $basic->basic_name=$_POST['name'];
        $basic->basic_email=$_POST['email'];
        $basic->basic_number=$_POST['number'];
        if($basic->save())
        {
            echo "Data save successfully";
        }
        else{
            echo "error";
        }

    }
    public function getdata(){
        $query=cafee::get();
        return view('cafe-table',compact('query'));
}

}
