<?php namespace Zhafri\Coursemaker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZhafriCoursemakerCourse extends Migration
{
    public function up()
    {
        Schema::create('zhafri_coursemaker_course', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('course_id')->unsigned();
            $table->string('course_title', 255);
            $table->text('course_description');
            $table->string('course_video', 255);
            $table->string('course_logo', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zhafri_coursemaker_course');
    }
}
