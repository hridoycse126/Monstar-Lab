@extends('layouts.other')
@section('other')
<div class="container">
 <div class="table-wrapper">
<div class="table-wrapper">
<div class="modal-content">
  <div class="row">
  <div class="col-sm-6">
                        <h2 style="margin-left: 25px;margin-top: 5px;">Edit <b>Salary</b> List</h2>
                    </div>

 <form action="/salary/update/insert" method="POST" enctype="multipart/form-data">
                   <input type="hidden" name="id" value="{{ $salaries->id }}">
                    
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label><h5>Salary Name</h5></label>
                            <input type="text" maxlength="6" class="form-control" name="salary_amount" value="{{ $salaries->salary_amount }}" required>
                        </div>                 
                    </div>
                    <div class="modal-footer">
                        <a href="/salary"><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"></a>
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