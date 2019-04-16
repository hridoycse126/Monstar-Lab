<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
</head>
<style>
div
{
    border-radius: 5px;
    }
#header
{
    position: fixed;
    z-index: 1;
    height:55px;
    width: 100%;
    background-color: #668284;
    margin-bottom: 5px
    }
 
#name {
    float:left;
    margin-left: 20px;
    padding-bottom: 10px;
    font-size: 16px;
    font-family: Verdana, sans-serif;
    color: #ffffff;
}
 
#email{
    float:right;
    margin-right: 20px;
    padding-bottom: 10px;
    font-size: 16px;
    font-family: Verdana, sans-serif;
    color: #ffffff;
}
 
#contact
{
    margin-left:45%;
    padding-bottom: 10px;
    font-size: 16px;
    font-family: Verdana, sans-serif;
    color: #ffffff;
    }
 
a:hover {
    font-weight: bold;
}
 
.right
{
    float: left;
    margin-top: 2px;
    padding-left:5px;
    /*margin-right: -10px;
    margin-left: 14%;*/
    height: auto;
    width: 99%;
    background-color: #E3EDD8;
    }
     
#footer
{
    height:40px;
    clear:both;
    position: relative;
    background-color: #C1E3E1;
    }
     
h3
{
    text-decoration: underline;
    }
 
#job-responsibilities
{
    padding: 1px;
    }
.job-title
{
    font-weight: bold;
    }
table
{
    border: 1px dashed black;
    }
td
{
    padding: 2px;
    border: 1px solid #E88741;
    }
 
#course-name
{
    font-weight:bold;
    }
 
#company-name
{
    height:2px;
    text-decoration:underline;
    }
#job-title
{
    height: 5px;
    }
.job-duration
{
    float:right;
    }
#heading
{
    font-weight:bold;
    }
</style>
<body>
<div id="header">
    @foreach ($employees as $employees) 
    <center><h2>{{$employees->first_name}} {{$employees->last_name}}</h2></center>
   <div class="left">
     </div>
     <div class="right">

            <h3>ID: {{$employees->emp_id}}</h3>

            <h3>Gender: {{$employees->gender}}</h3>
            <h3>Blood Group: {{$employees->blood}}</h3>

            <h3>Personal Information:</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Father's Name: </span>{{$employees->father_name}}</li>
                <br>
                <br>
                <li>
                <span id="course-name">Date Of Birth: </span>{{$employees->birth_date}}</li>
                <br>
                <br>
                <li>
                <span id="course-name">Email: </span>{{$employees->email}}</li>
                <br>
                <br>
                <li>
                <span id="course-name">Mobile Number: </span>{{$employees->number}}</li>
                <br>
                <br>
                <li>
                <span id="course-name">NID No: </span>{{$employees->nid}}</li>
                <br>
                <br>
                <li>
                <span id="course-name">Address: </span>{{$employees->address}}</li>
                 </ul>
            </p>

            <h3>Other Information</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Department: </span>{{$employees->dep_name}}</li>
                <br>
                <br>
                <li>
                <span id="course-name">Division: </span>{{$employees->div_name}}</li>
                <br>
                <br>
                <li>
                <span id="course-name">Salary: </span>{{$employees->salary_amount}} TK</li>
                <br>
                <br>
                <li>
                <span id="course-name">Job City: </span>{{$employees->city_name}}</li>
                <br>
                <br>
                <li>
                <span id="course-name">Job Country: </span>{{$employees->country_name}}</li>
                <br>
                <br>
                <li>
                <span id="course-name">Joining Date: </span>{{$employees->join_date}}</li>
                <br>
                <br>
            </ul>
            </p>
            @endforeach
     </div>
     <div id="footer"></div>
    </body>
</html>
</html>

 