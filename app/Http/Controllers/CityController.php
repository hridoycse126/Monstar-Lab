<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $cities=City::orderBy('id','DESC')->get();
        return view('system_manage.cities.index',['cities'=>$cities]);

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
        $this->validate($request,[
            'city_name' => 'required|min:2',
            'zip_code' => 'required|min:4|unique:cities'
        ]);
        City::create($request->only('city_name', 'zip_code'));
        return redirect('/city')->with('city', 'City Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
       // $cities = City::get();
       // return view('system_manage.cities.index', ['cities'=>$cities]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
       // $action = "/city/update/insert";
        $id=$request->get('id');
        $cities=City::find($id);
        return view('system_manage.cities.edit', ['cities'=>$cities]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $this->validate($request,[
            'city_name' => 'required|min:2',
            'zip_code' => 'required|min:4|unique:cities'
            
        ]);
        $id=$request->get('id');
        $cities=City::find($id);
        $cities->city_name=$request->input('city_name');
        $cities->zip_code=$request->input('zip_code');
        $cities->save();
        return redirect('/city')->with('city', 'City Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id=$request->get('id');
        $cities=City::find($id);
        $cities->delete();
        return redirect('/city')->with('city','City Deleted Successfully');
    }
}
