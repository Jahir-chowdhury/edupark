<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->string('UID')->nullable();
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('live_area');
            $table->string('qualification');
            $table->string('institution');
            $table->string('day_per_week');
            $table->string('fees');
            $table->string('tution_style');
            $table->string('learing_place');
            $table->string('medium');
            $table->string('gender');
            $table->string('prefer_class')->nullable();
            $table->string('prefer_subject')->nullable();
            $table->string('prefer_area')->nullable();
            $table->string('group1')->nullable();
            $table->string('institution1')->nullable();
            $table->string('result1')->nullable();
            $table->string('pass_year1')->nullable();            
			$table->string('group2')->nullable();
            $table->string('institution2')->nullable();
            $table->string('result2')->nullable();
            $table->string('pass_year2')->nullable();			
			$table->string('group3')->nullable();
            $table->string('institution3')->nullable();
            $table->string('result3')->nullable();
            $table->string('pass_year3')->nullable();			
			$table->string('group4')->nullable();
            $table->string('institution4')->nullable();
            $table->string('result4')->nullable();
            $table->string('pass_year4')->nullable();
            $table->text('pic')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
