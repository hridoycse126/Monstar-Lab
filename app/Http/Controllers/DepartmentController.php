<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
class DepartmentController extends Controller
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
        $departments=Department::orderBy('id','DESC')->get();
        return view('system_manage.departments.index',['departments'=>$departments]);
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
            'dep_name' => 'required|unique:departments'
        ]);
        Department::create($request->only('dep_name'));
        return redirect('/department')->with('department', 'Department Added Successfully');
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
        $departments = Department::get();
        return view('system_manage.departments.index', ['departments'=>$departments]);
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
        $departments=Department::find($id);
        return view('system_manage.departments.edit', ['departments'=>$departments]);
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
           'dep_name' => 'required|unique:departments,dep_name|min:4'
        ]);
        $id=$request->get('id');
        $departments=Department::find($id);
        $departments->dep_name=$request->input('dep_name');
        $departments->save();
        return redirect('/department')->with('department', 'Department Updated Successfully.');
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
        $departments=Department::find($id);
        $departments->delete();
        return redirect('/department')->with('department','Department Deleted Successfully');
    }
}
