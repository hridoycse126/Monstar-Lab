@extends('layouts.admin')
@section('admin')

<div class="container">
 <div class="table-wrapper">
<div class="table-wrapper">
<div class="modal-content">
  <div class="row">
  <div class="col-sm-6">
                        <h2>Edit <b>City</b> List</h2>
                    </div>

 <form action="" method="POST">
                   <input type="hidden" name="id" value="{{ $cities->id }}">
                    
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label><h5>First Name</h5></label>
                            <input type="text" class="form-control" name="first_name" value="" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Last Name</h5></label>
                            <input type="text" class="form-control" name="last_name" value="" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Father's Name</h5></label>
                            <input type="text" class="form-control" name="father_name" value="" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Email Address</h5></label>
                            <input type="email" class="form-control" name="email" value="" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Mobile Number</h5></label>
                            <input type="number" class="form-control" name="number" value="" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Address</h5></label>
                            <input type="text" class="form-control" name="address" value="" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Blood Group</h5></label>
                            <input type="text" class="form-control" name="blood" value="" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Gender</h5></label>
                            <input type="text" class="form-control" name="gender" value="" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Date Joined</h5></label>
                            <input type="text" class="form-control" name="join_date" value="" required>
                        </div>
                        <div class="form-group">
                            <label><h5>Date Of Birth</h5></label>
                            <input type="text" class="form-control" name="birth_date" value="" required>
                        </div>                  
                    </div>
                    <div class="modal-footer">
                        <a href="/list"><input type="button" class="btn btn-default" onclick="/list" data-dismiss="modal" value="Cancel"></a>
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