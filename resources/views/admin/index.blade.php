@extends('layouts.app')
@section('content')
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Admin</b> List</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addAdminModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Admin</span></a>                        
                    </div>
                </div>
            </div>
            <table >
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>E-Mail Address</th>
                        <th>Password</th>
                        <th>Confirm Password</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
             
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td>
                           
                            <a href="" class="edit" ><i class="material-icons" data-toggle="tooltip"  title="Edit">&#xE254;</i></a>
                            <a href=""  onclick="return confirm('Are you sure you want to delete these Records?')" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
    </div>

    <!-- Edit Add City Modal HTML -->
    <div id="addAdminModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/admin/insert" method="POST">
                  @csrf
                    <div class="modal-header">                      
                        <h4 class="modal-title">Add Admin</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label>Name</label>
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>   
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>                  
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    
                        <input type="submit" class="btn btn-success" value="Register">
                    </div>
                </form>
            </div>
        </div>
         </div>
       <!--  @if (session('city'))
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        {{ session('city') }}
        </div>
    </div>
</div>
    @endif-->
   
@endsection