@extends('layouts.other')
@section('other')
 @if (session('employee'))
    <div class="modal-dialog" style="font-size: 20px;">
        <div class="modal-content">
            <div class="modal-header">
        {{ session('employee') }}
        </div>
    </div>
</div>
@endif
    <div class="container">
        <div class="search_area">
        <form action="{{route('employees.search')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" name="search" maxlength="11" placeholder="search" required style="font-size: 15px;" />
            <select name="options" id="options" style="font-size: 15px;">
                <option value="emp_id" style="font-size: 15px;">ID</option>
                <option value="first_name" style="font-size: 15px;">First Name</option>
                <option value="nid" style="font-size: 15px;">NID</option>
                <option value="dep_name" style="font-size: 15px;">Department</option>
            </select>
            <button type="submit" class="btn btn-primary" style="font-size: 15px;">Submit</button>
        </form>
    </div>

        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Employees</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="/employee" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>     </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>E-mail</th>
                        <th>Mobile Number</th>
                        <th>Address</th>
                        <th>Blood Group</th>
                        <th>NID Number</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Option</th>
                                       
                    </tr>
                </thead>
                <tbody>
               
                     @foreach($employees as $emp)
                    <tr>
                        <td>{{$emp->emp_id}}</td>
                        <td>{{$emp->first_name}}</td>
                        <td>{{$emp->last_name}}</td>
                        <td>{{$emp->email}}</td>
                        <td>{{$emp->number}}</td>
                        <td>{{$emp->address}}</td>
                        <td>{{$emp->blood}}</td>
                        <td>{{$emp->nid}}</td>
                        <td>{{$emp->gender}}</td>
                        <td>{{$emp->dep_name}}</td>
                        <td>
                            <a href="{{ asset('/employee/show?id='.$emp->id)}}" class="view"><i class="material-icons" data-toggle="tooltip" title="View">&#xE896;</i></a>
                            <a href="{{asset('/downloadPDF?id='.$emp->id)}}"><i>&#x20BD;</i></a>
                            <a href="{{ asset('employee/update?id='.$emp->id)}}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="{{ asset('/employee/delete?id='.$emp->id)}}"  onclick="return confirm('Are you sure you want to delete these Records?')" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                           
                        </td>
                    </tr>
                 @endforeach
                </tbody>
            </table>
        </div>
    </div>
     
    @endsection