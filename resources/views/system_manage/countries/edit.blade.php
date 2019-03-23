@extends('layouts.other')
@section('other')
<div class="container">
 <div class="table-wrapper">
<div class="table-wrapper">
<div class="modal-content">
  <div class="row">
  <div class="col-sm-6">
                        <h2>Edit <b>Country</b> List</h2>
                    </div>

 <form action="/country/update/insert" method="POST">
                   <input type="hidden" name="id" value="{{ $countries->id }}">
                    
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label><h5>Country Name</h5></label>
                            <input type="text" class="form-control" name="country_name" value="{{  $countries->country_name }}" required>
                        </div>                 
                    </div>
                    <div class="modal-footer">
                        <a href="/country"><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"></a>
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