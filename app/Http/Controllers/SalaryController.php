<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salary;
class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $salaries=Salary::orderBy('id','DESC')->get();
        return view('system_manage.salaries.index',['salaries'=>$salaries]);
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
            'salary_amount' => 'required|unique:salaries|min:3'
        ]);
        Salary::create($request->only('salary_amount'));
        return redirect('/salary')->with('salary', 'Salary Added Successfully');
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
         return view('system_manage.salaries.index');
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
        $salaries=Salary::find($id);
        return view('system_manage.salaries.edit', ['salaries'=>$salaries]);
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
            'salary_amount' => 'required|unique:salaries|min:3'
        ]);
        $id=$request->get('id');
        $salaries=Salary::find($id);
        $salaries->salary_amount=$request->input('salary_amount');
        $salaries->save();
        return redirect('/salary')->with('salary', 'Salary Updated Successfully.');
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
        $salaries=Salary::find($id);
        $salaries->delete();
        return redirect('/salary')->with('salary','Salary Deleted Successfully');
    }
}
