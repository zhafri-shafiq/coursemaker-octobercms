<?php namespace Zhafri\Coursemaker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZhafriCoursemakerLesson extends Migration
{
    public function up()
    {
        Schema::create('zhafri_coursemaker_lesson', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('lesson_id')->unsigned();
            $table->string('lesson_title', 255);
            $table->integer('course_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zhafri_coursemaker_lesson');
    }
}
