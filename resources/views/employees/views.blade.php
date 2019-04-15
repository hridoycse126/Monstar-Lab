@extends('layouts.views')
@section('views')

<div class="container emp-profile">
    <a href="/employee/list"><input type="button" class="btn btn-default" value="Back" style="margin-bottom: 55px;background:  #566787; font-size: 20px; color: #fff;"></a>
            <form>
              
                <div class="row">
                    <div class="col-md-4">
                      <div class="profile-img"> 
                            @if($employeesPost->picture!==null)
                            <img src="{{asset('pictures/'.$employeesPost->picture)}}" alt="{{$employeesPost->picture}}" />
                            @endif
                        </div>  
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5 style="font-style: bold;font-size: 20px;">
                                        {{$employeesPost->first_name}}
                                    </h5>
                                    <h6 style="font-style: bold;font-size: 17px;">
                                       {{$employeesPost->div_name}}
                                    </h6>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 55px;">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Gender</p>
                            <a>{{$employeesPost->gender}}</a><br/>
                            <p>Department</p>
                            <a>{{$employeesPost->dep_name}}</a><br/>
                            <p>City</p>
                            <a>{{$employeesPost->city_name}}</a><br/>
                            <p>Country</p>
                            <a>{{$employeesPost->country_name}}</a><br/>
                            
                        </div>
                    </div>
                    <div class="col-md-8" style="margin-top: -55px">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="background:  #E6E6FA;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employeesPost->last_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Father's Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employeesPost->father_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employeesPost->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employeesPost->number}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Blood Group</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employeesPost->blood}}</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="background:  #E6E6FA;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Joining Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employeesPost->join_date}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date Of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employeesPost->birth_date}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Salary</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employeesPost->salary_amount}}</p>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>NID No</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employeesPost->nid}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employeesPost->address}}</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
             
           </form>        
        </div>
        @endsection