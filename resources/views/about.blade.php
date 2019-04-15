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
<div>
	<a href="/about" class="button1">
   <em> </em>   
    <span>
      About US
      </span>
  </a>
  <hr>
<h2 style="background: #9A8A62;padding: 15px;font-style: bold;">About Us</h2>


<h3 style="background: #9A8A62;padding: 15px;">Company Profile</h3>
</div>
<h4>Company Name: Monstar Lab,Inc.</h4>
<hr>
<h4>Head Office: Ebisu Prime Square Tower 4F,1-1-39 Hiroo,Shibuya-ku,Tokyo 150-0012</h4>
<hr>
<h4>Establishment: February 3,2006</h4>
<hr>
<h4>Capital: JPY2,456,460,000</h4>
<hr>
<h4>President & CEO: Hiroki Inagawa</h4>
<h3 style="background: #9A8A62;padding: 15px;">Contact Us</h3>


<div style="background-color:#aaa;">
	<h3><b>Supervised By:</b></h3>
</div>
<img src="sir.png" alt="picture" style="padding:0px;width:220px;height:180px;border:4px solid #fff;border-radius:20%;">
<hr>
<h4>Md. Ashikul Islam Shakil</h4>
<hr>
<h4><br>Assistant Professor<br>Dept.of CSE,MU</h4>
<hr>
<h4>Phone:01780-272460</h4>
<hr>
<h4>Email:shakilcse96@gmail.com</h4>
<hr>
<div style="background-color:#aaa;">
	<h3><b>Developed By:</b></h3>
</div>
	<img src="hridoy.jpg" alt="picture" style="padding:0px;width:220px;height:180px;border:4px solid #fff;border-radius:20%;">
  <hr>
<h4>Md. Abdul Mannan Hridoy</h4>
<hr>
<h4><br>MU CSE 38th Batch</h4>
<hr>
<h4>Phone:01772-43408</h4>
<hr>
<h4>Email:hridoyking5464@gmail.com</h4>
<hr style="padding: 5px;background: white;">
<img src="ali.png" alt="picture" style="padding:0px;width:220px;height:180px;border:4px solid #fff;border-radius:20%;">
<hr>
<h4>Ali Ahmed</h4>
<hr>
<h4><br>MU CSE 38th Batch</h4>
<hr>
<h4>Phone:01715-766535</h4>
<hr>
<h4>Email:aliahmedcse128@gmail.com</h4>
</div>
@endsection
