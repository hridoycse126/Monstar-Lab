<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public $fillable =['emp_id','first_name','last_name','father_name','email','number','address','blood','nid','gender','salary_id','department_id','division_id','city_id','country_id','join_date','birth_date','picture'];
}
