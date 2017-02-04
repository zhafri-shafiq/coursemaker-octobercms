<?php namespace Zhafri\Coursemaker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZhafriCoursemakerQuiz extends Migration
{
    public function up()
    {
        Schema::create('zhafri_coursemaker_quiz', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('quiz_id')->unsigned();
            $table->string('quiz_title', 255);
            $table->integer('course_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zhafri_coursemaker_quiz');
    }
}
