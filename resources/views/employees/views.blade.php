@extends('layouts.other')
@section('other')

<div class="container emp-profile">
    <a href="/employee/list"><input type="button" class="btn btn-default" value="Back" style="margin-bottom: 15px;background:  #fcfcfc;font-size: 15px;"></a>
            <form>
              
                <div class="row">
                    <div class="col-md-4">
                      <div class="profile-img"> 
                            @if($employees->picture!==null)
                            <img src="{{asset('pictures/'.$employees->picture)}}" alt="{{$employees->picture}}" />
                            @endif
                        </div>  
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{$employees->first_name}}
                                    </h5>
                                    <h6>
                                        division->dev_nam
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
                            <a href="">{{$employees->gender}}</a><br/>
                            <p>Department</p>
                            <a href="">Web Designer</a><br/>
                            <p>City</p>
                            <a href="">Web Designer</a><br/>
                            <p>Country</p>
                            <a href="">Web Designer</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="background:  #E6E6FA;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employees->last_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Father's Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employees->father_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employees->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employees->number}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Blood Group</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employees->blood}}</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="background:  #E6E6FA;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Joining Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employees->join_date}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date Of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employees->birth_date}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Salary</label>
                                            </div>
                                            salarie
                                            <div class="col-md-6">
                                                <p>sal</p>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>NID No</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employees->nid}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employees->address}}</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
             
           </form>        
        </div>
        @endsection