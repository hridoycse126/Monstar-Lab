@extends('layouts.other')
@section('other')
<div class="container">
 <div class="table-wrapper">
<div class="table-wrapper">
<div class="modal-content">
  <div class="row">
  <div class="col-sm-6">
                        <h2>Edit <b>Deparment</b> List</h2>
                    </div>

 <form action="/department/update/insert" method="POST">
                   <input type="hidden" name="id" value="{{ $departments->id }}">
                    
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label><h5>Deparment Name</h5></label>
                            <input type="text" class="form-control" name="dep_name" value="{{  $departments->dep_name }}" required>
                        </div>                 
                    </div>
                    <div class="modal-footer">
                        <a href="/department"><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"></a>
                         @csrf()
                        <input type="submit" class="btn btn-info" value="Update">
                    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection