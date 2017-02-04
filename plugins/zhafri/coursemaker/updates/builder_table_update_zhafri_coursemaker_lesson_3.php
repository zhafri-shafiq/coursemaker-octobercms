<?php namespace Zhafri\Coursemaker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZhafriCoursemakerLesson3 extends Migration
{
    public function up()
    {
        Schema::table('zhafri_coursemaker_lesson', function($table)
        {
            $table->renameColumn('lesson_id', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('zhafri_coursemaker_lesson', function($table)
        {
            $table->renameColumn('id', 'lesson_id');
        });
    }
}
