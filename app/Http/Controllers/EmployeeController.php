<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Employee;
use App\Salary;
use App\Department;
use App\Division;
use App\City;
use App\Country;
class EmployeeController extends Controller
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
        $employees=Employee::orderBy('id','DESC')->get();
        $salaries=Salary::orderBy('id','DESC')->get();
        $departments=Department::orderBy('id','DESC')->get();
        $divisions=Division::orderBy('id','DESC')->get();
        $cities=City::orderBy('id','DESC')->get();
        $countries=Country::orderBy('id','DESC')->get();
        return view('employees.create',['employees'=>$employees,'salaries'=>$salaries,'departments'=>$departments,'divisions'=>$divisions,'cities'=>$cities,'countries'=>$countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $employees =Employee::get();
        return view('employees.index', ['employees'=>$employees]);
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
        $this->validate($request, [
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address'        =>  'required|min:10|max:500',
            'number'          =>  'required|max:13',
            'nid'          =>  'required|max:16',
            'email'          =>  'required|email|unique:employees,email|max:250'
        ]);

        $picture = null;
        if ($request->hasFile('picture')) {
            $imageName = $request->file('picture');
            $extension = $imageName->getClientOriginalExtension();
            $picture = date('Y-m-d') . '-' . str_random(10) . '.' . $extension;
            $imageName->move(public_path('pictures/'), $picture);

        }

        $employees=new Employee();
        $employees->first_name = $request->input('first_name');
        $employees->last_name = $request->input('last_name');
        $employees->father_name = $request->input('father_name');
        $employees->email = $request->input('email');
        $employees->number = $request->input('number');
        $employees->address = $request->input('address');
        $employees->blood = $request->input('blood');
        $employees->nid = $request->input('nid');
        $employees->gender = $request->input('gender');

        $salary_amount = $request->input('salary_amount');
        $salary=Salary::where('salary_amount', $salary_amount)->first();
        $employees->salary_id = $salary->id;

        $dep_name = $request->input('dep_name');
        $department=Department::where('dep_name', $dep_name)->first();
        $employees->dep_id = $department->id;

        $div_name = $request->input('div_name');
        $division=Division::where('div_name', $div_name)->first();
        $employees->div_id = $division->id;

        $city_name = $request->input('city_name');
        $city=City::where('city_name', $city_name)->first();
        $employees->city_id = $city->id;

        $country_name = $request->input('country_name');
        $country=Country::where('country_name', $country_name)->first();
        $employees->country_id = $country->id;

        $employees->join_date = $request->input('join_date');
        $employees->birth_date = $request->input('birth_date');
        
        $employees->picture = $picture;
        $employees->Save();
        return redirect('/employee')->with('employee','Employee Details Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        
        $id=$request->get('id');
        $employees=Employee::find($id);
        $employeesPost = DB::table('employees')
        ->join('salaries', 'salaries.id', '=', 'employees.salary_id')
        ->join('departments', 'departments.id', '=', 'employees.dep_id')
        ->join('divisions', 'divisions.id', '=', 'employees.div_id')
        ->join('cities', 'cities.id', '=', 'employees.city_id')
        ->join('countries', 'countries.id', '=', 'employees.country_id')
        ->where('employees.id', '=', $employees->id)
        ->first(['employees.*', 'salaries.salary_amount', 'departments.dep_name', 'divisions.div_name','cities.city_name','countries.country_name']);
        return view('employees.views', ['employeesPost'=>$employeesPost]);
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
        $employees=Employee::find($id);
        return view('employees.edit', ['employees'=>$employees]);
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
        $id=$request->get('id');
        $employees=Employee::find($id);

        $this->validate($request, [
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address'        =>  'required|min:10|max:350',
            'number'          =>  'required|max:11',
            'nid'          =>  'required|max:10',
            'email'          =>  'required|email|unique:employees,email|max:250'
        ]);
        $picture = $request->get('imageOld');
        if ($request->hasFile('picture')) {
            $imageName = $request->file('picture');
            $extension = $imageName->getClientOriginalExtension();
            $picture = date('Y-m-d') . '-' . str_random(10) . '.' . $extension;
            $imageName->move(public_path('pictures/'), $picture);
        }
        $employees->first_name=$request->input('first_name');
        $employees->last_name=$request->input('last_name');
        $employees->father_name=$request->input('father_name');
        $employees->email=$request->input('email');
        $employees->number=$request->input('number');
        $employees->address=$request->input('address');
        $employees->blood=$request->input('blood');
        $employees->nid=$request->input('nid');
        $employees->gender=$request->input('gender');
        $employees->picture = $picture;
        $employees->save();
        
        return redirect('/employee/list')->with('employee', 'Employees Details Updated Successfully.');
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
        $employees=Employee::find($id);
        $employees->delete();
        return redirect('/employee/list')->with('employee','Employee Details Deleted Successfully');
    }
    public function search(Request $request){
        $this->validate($request,[
            'search'   => 'required|min:1',
            'options'  => 'required'
        ]);
        $str = $request->input('search');
        $option = $request->input('options');
        $employees = Employee::where($option, 'LIKE' , '%'.$str.'%')->Paginate(4);
        return view('employees.index')->with(['employees' => $employees , 'search' => true ]);
    }
}
