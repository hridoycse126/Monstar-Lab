@extends('layouts.other')
@section('other')
@if (session('salary'))
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        {{ session('salary') }}
        </div>
    </div>
</div>
    @endif
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Salary</b> List</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addSalaryModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Salary</span></a>                        
                    </div>
                </div>
            </div>
            <table >
                <thead>
                    <tr>
                        <th>Salary Name</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($salaries as $salary)
                    <tr>
                        <td>{{ $salary-> salary_amount }}</td>
                        <td>
                           
                            <a href="{{ asset('salary/update?id='.$salary->id) }}" class="edit" ><i class="material-icons" data-toggle="tooltip"  title="Edit">&#xE254;</i></a>
                            <a href="{{ asset('salary/delete?id='.$salary->id) }}"  onclick="return confirm('Are you sure you want to delete these Records?')" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Edit Add City Modal HTML -->
    <div id="addSalaryModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/salary/insert" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-header">                      
                        <h4 class="modal-title">Add Salary</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label>Salary Name</label>
                            <input type="text" class="form-control" name="salary_amount" required>
                        </div>              
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        @csrf()
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
         </div>
         
   
@endsection