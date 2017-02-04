<?php namespace Zhafri\Coursemaker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZhafriCoursemakerCourse2 extends Migration
{
    public function up()
    {
        Schema::table('zhafri_coursemaker_course', function($table)
        {
            $table->renameColumn('course_id', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('zhafri_coursemaker_course', function($table)
        {
            $table->renameColumn('id', 'course_id');
        });
    }
}
