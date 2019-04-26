@extends('layouts.admin')
@section('admin')

<div class="container">
 <div class="table-wrapper">
<div class="table-wrapper">
<div class="modal-content">
  <div class="row">
  <div class="col-sm-6">
                        <h2 style="margin-left: 25px;margin-top: 5px;">Edit <b>Employee</b> Details</h2>
                    </div>

 <form action="/employee/update/insert" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
                   <input type="hidden" name="id" value="{{ $employees->id }}">
                    
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label><h5>First Name</h5></label>
                            <input type="text" maxlength="18" class="form-control" name="first_name" value="{{  $employees->first_name }}" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Last Name</h5></label>
                            <input type="text" maxlength="9" class="form-control" name="last_name" value="{{ $employees->last_name }}" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Father's Name</h5></label>
                            <input type="text" maxlength="18" class="form-control" name="father_name" value="{{ $employees->father_name }}" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Email Address</h5></label>
                            <input type="email" maxlength="25" class="form-control" name="email" value="{{ $employees->email }}" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Mobile Number</h5></label>
                            <input type="number" maxlength="11" class="form-control" name="number" value="{{ $employees->number }}" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Address</h5></label>
                            <input type="text" maxlength="250" class="form-control" name="address" value="{{ $employees->address }}" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Blood Group</h5></label>
                            <input type="text" maxlength="2" class="form-control" name="blood" value="{{ $employees->blood }}" required>
                        </div>
                        <div class="form-group">
                            <label><h5>NID No</h5></label>
                            <input type="text" maxlength="16" class="form-control" name="nid" value="{{ $employees->nid }}" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Gender</h5></label>
                            <input type="text" maxlength="6" class="form-control" name="gender" value="{{ $employees->gender }}" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Date Joined</h5></label>
                            <input type="text" maxlength="10" class="form-control" name="join_date" value="{{ $employees->join_date }}" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Date Of Birth</h5></label>
                            <input type="text" maxlength="10" class="form-control" name="birth_date" value="{{ $employees->birth_date }}" required>
                        </div>                  
                    </div>
                    <div class="file-field input-field col s12 m12 l12 xl8 offset-xl2">
            <p style="font-size: 25px"><b><b></p>
            <div class="btn">
              <input type="hidden" name="imageOld" value="{{ $employees->picture }}">
            </div>
             
                    <div class="modal-footer">
                        <a href="/employee/list"><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"></a>
                        
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