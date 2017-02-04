<?php namespace Zhafri\Coursemaker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZhafriCoursemakerCourse extends Migration
{
    public function up()
    {
        Schema::table('zhafri_coursemaker_course', function($table)
        {
            $table->dropColumn('course_video');
            $table->dropColumn('course_logo');
        });
    }
    
    public function down()
    {
        Schema::table('zhafri_coursemaker_course', function($table)
        {
            $table->string('course_video', 255);
            $table->string('course_logo', 255);
        });
    }
}
