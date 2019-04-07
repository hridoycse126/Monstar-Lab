<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
class DivisionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $divisions=Division::orderBy('id','DESC')->get();
        return view('system_manage.divisions.index',['divisions'=>$divisions]);
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
            'div_name' => 'required|unique:divisions'
        ]);
        Division::create($request->only('div_name'));
        return redirect('/division')->with('division', 'Division Added Successfully');
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
        $divisions = Division::get();
        return view('system_manage.divisions.index', ['divisions'=>$divisions]);
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
        $id=$request->get('id');
        $divisions=Division::find($id);
        return view('system_manage.divisions.edit', ['divisions'=>$divisions]);
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
           'div_name' => 'required|unique:divisions,div_name|min:4'
        ]);
        $id=$request->get('id');
        $divisions=Division::find($id);
        $divisions->div_name=$request->input('div_name');
        $divisions->save();
        return redirect('/division')->with('division', 'Division Updated Successfully.');
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
        $divisions=Division::find($id);
        $divisions->delete();
        return redirect('/division')->with('division','Division Deleted Successfully');
    }
}
