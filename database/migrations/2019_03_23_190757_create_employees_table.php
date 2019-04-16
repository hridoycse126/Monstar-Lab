<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id'); 
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('email');
            $table->string('number');
            $table->mediumText('address');
            $table->string('blood');
            $table->string('nid');
            $table->string('gender'); 
            $table->integer('salary_id');
            $table->integer('dep_id');
            $table->integer('div_id');
            $table->integer('city_id');
            $table->integer('country_id');
            $table->date('join_date');
            $table->date('birth_date');
            $table->string('picture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
