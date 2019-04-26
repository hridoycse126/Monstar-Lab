@extends('layouts.admin')
@section('admin')
  @if (session('employee'))
    <div class="modal-dialog" style="font-size: 20px;">
        <div class="modal-content">
            <div class="modal-header">
        {{ session('employee') }}
        </div>
    </div>
</div>
    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

<div class="limiter">
    <div class="container-login100">  
      <div class="wrap-login100"  style="width:750px">
        <form action="/employee/insert" method="POST" class="login100-form validate-form" enctype="multipart/form-data">
          {{ csrf_field() }}
          <h5 class="login100-form-title p-b-26" style="color: green">Add Employee</h5>

          <div class="wrap-input100 validate-input" data-validate = "Valid id is: 0-9">
            <input class="input100" type="text" name="emp_id" required>
            <span class="focus-input100" data-placeholder="Employee ID"></span>
          </div>
          
          <div class="wrap-input100 validate-input" data-validate = "Valid name is: a-z">
            <input class="input100" type="text" name="first_name">
            <span class="focus-input100" data-placeholder="First Name"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid name is: a-z">
            <input class="input100" type="text" name="last_name">
            <span class="focus-input100" data-placeholder="Last Name"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid name is: a-z">
            <input class="input100" type="text" name="father_name">
            <span class="focus-input100" data-placeholder="Father's Name"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is: az@mail.com">
            <input class="input100" maxlength="25" type="email" name="email">
            <span class="focus-input100" data-placeholder="Email Address"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "0-9">
            <input class="input100" maxlength="11" type="number" name="number" required>
            <span class="focus-input100" data-placeholder="Mobile Number"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid address is: a-z/0-9">
            <input class="input100" maxlength="150" type="text" name="address">
            <span class="focus-input100" data-placeholder="Address"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid blood group is: A-/AB+">
            <p>Blood Group</p> 
            <select class="input100" name="blood">
              <option value="">None</option> 
              <option value="A-">A-</option> 
              <option value="A+">A+</option> 
              <option value="B-">B-</option> 
              <option value="B+">B+</option>
              <option value="O-">O-</option> 
              <option value="O+">O+</option>
              <option value="AB-">AB-</option> 
              <option value="AB+">AB+</option>
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "0-9">
            <input class="input100" maxlength="16" type="number" name="nid">
            <span class="focus-input100" data-placeholder="NID Number"></span>
          </div>


          <div class="wrap-input100 validate-input" data-validate = "Valid gender is: male/female">
            <p>Gender</p> 
            <select class="input100" name="gender"> 
              <option value="Male">Male</option> 
              <option value="Female">Female</option> 
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Tk">
            <p>Salary</p> 
            <select class="input100" name="salary_amount">
            @foreach($salaries as $salary) 
              <option value="{{ $salary->salary_amount }}">{{ $salary-> salary_amount }}</option>
            @endforeach 
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Department name choice">
            <p>Department</p> 
            <select class="input100" name="dep_name"> 
              @foreach($departments as $department)
              <option value="{{ $department->dep_name }}">{{ $department-> dep_name }}</option> 
              @endforeach 
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Division name choice">
            <p>Division</p> 
            <select class="input100" name="div_name">
            @foreach($divisions as $division)
              <option value="{{ $division->div_name }}">{{ $division-> div_name }}</option>
            @endforeach
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "City name choice">
            <p>City</p> 

            <select class="input100" name="city_name">
            @foreach($cities as $city)
              <option value="{{ $city->city_name }}">{{ $city-> city_name }}</option>
            @endforeach
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Country name choice">
            <p>Country</p> 
            <select class="input100" name="country_name"> 
            @foreach($countries as $country)
              <option value="{{ $country->country_name }}">{{ $country-> country_name }}</option>
            @endforeach
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid date is: 11/12/2018">
            <p>Date Joined</p>
            <input class="input100" maxlength="10" type="date" name="join_date"> 
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid date is: 11/12/2018">
            <p>Date Of Birth</p>
            <input class="input100" maxlength="10" type="date" name="birth_date">
          </div>
          <div class="file-field input-field col s12 m12 l12 xl8 offset-xl2">
            <p style="font-size: 25px"><b>Picture<b></p>
            <div class="btn">
              <input type="file" id="picture" name="picture">
            </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn">
                <input type="submit" value="">Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



@endsection