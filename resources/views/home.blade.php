@extends('layouts.admin')
@section('admin')
  <div class="wrapper">
  <a href="/home" class="button1">
   <em> </em>   
    <span>
      Home
      </span>
  </a>
    <a href="/employee" class="button1">
   <em></em>   
    <span>
      Add Employee List
      </span>
  </a>
<a href="/employee/list" class="button1">
   <em> </em>   
    <span>
      Manage Employees List
      </span>
  </a>
<br>
<div style="margin-top: 20px;">
	<a href="/about" class="button1">
   <em> </em>   
    <span>
      About US
      </span>
  </a>
</div>

</div>
					
@endsection
