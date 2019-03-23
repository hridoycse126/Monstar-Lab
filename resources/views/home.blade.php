@extends('layouts.admin')
@section('admin')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

<div class="limiter">
    <div class="container-login100">  
      <div class="wrap-login100"  style="width:750px">
        <form class="login100-form validate-form">
          <h5 class="login100-form-title p-b-26" style="color: green">Add Employee</h5>
          
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
            <input class="input100" type="email" name="email">
            <span class="focus-input100" data-placeholder="Email Address"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "0-9">
            <input class="input100" type="number" name="number">
            <span class="focus-input100" data-placeholder="Mobile Number"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid address is: a-z/0-9">
            <input class="input100" type="email" name="address">
            <span class="focus-input100" data-placeholder="Address"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid blood group is: A-/AB+">
            <p>Blood Group</p> 
            <select class="input100" name="blood">
            <option value="Female">None</option> 
              <option value="Male">A-</option> 
              <option value="Female">A+</option> 
              <option value="Male">B-</option> 
              <option value="Female">B+</option>
              <option value="Male">O-</option> 
              <option value="Female">O+</option>
              <option value="Male">AB-</option> 
              <option value="Female">AB+</option>
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "0-9">
            <input class="input100" type="number" name="nid">
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
            <select class="input100" name=""> 
              <option value="Salary">Salary</option> 
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "name of department">
            <p>Department</p> 
            <select class="input100" name=""> 
              <option value="dep">Department</option> 
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Division name choice">
            <p>Division</p> 
            <select class="input100" name=""> 
              <option value="dv">Division</option> 
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "City name choice">
            <p>City</p> 
            <select class="input100" name=""> 
              <option value="dv">City</option> 
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "COUNTRY name choice">
            <p>Country</p> 
            <select class="input100" name=""> 
              <option value="dv">Country</option> 
            </select>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid date is: 11/12/2018">
            <p>Date Joined</p>
            <input class="input100" type="date" name="join_date"> 
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid date is: 11/12/2018">
            <p>Date Of Birth</p>
            <input class="input100" type="date" name="birth_date">
          </div>


          <div class="file-field input-field col s12 m12 l12 xl8 offset-xl2">
            <p style="font-size: 25px"><b>Picture<b></p>
            <div class="btn">
              <input type="file" name="picture">
            </div>
               <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" value="picture">
          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn">
                <a href="#">Save</a>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
