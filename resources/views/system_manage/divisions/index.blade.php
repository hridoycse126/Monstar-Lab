@extends('layouts.other')
@section('other')
@if (session('division'))
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        {{ session('division') }}
        </div>
    </div>
</div>
@endif
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Division</b> List</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addDivisionModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Division</span></a>                        
                    </div>
                </div>
            </div>
            <table >
                <thead>
                    <tr>
                        <th>Division Name</th>
                        <th>Option</th>
                    </tr>
                </thead>
                 @foreach($divisions as $division)
                <tbody>
                     
                    <tr>
                        <td> {{ $division-> div_name }} </td>
                        <td>
                           
                            <a href="{{ asset('division/update?id='.$division->id) }}" class="edit" ><i class="material-icons" data-toggle="tooltip"  title="Edit">&#xE254;</i></a>
                            <a href="{{ asset('division/delete?id='.$division->id) }}"  onclick="return confirm('Are you sure you want to delete these Records?')" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Edit Add City Modal HTML -->
    <div id="addDivisionModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/division/insert" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-header">                      
                        <h4 class="modal-title">Add Division</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label>Division Name</label>
                            <input type="text" class="form-control" name="div_name" required>
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