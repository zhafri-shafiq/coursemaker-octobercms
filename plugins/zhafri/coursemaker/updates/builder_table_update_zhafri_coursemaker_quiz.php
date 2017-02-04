<?php namespace Zhafri\Coursemaker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZhafriCoursemakerQuiz extends Migration
{
    public function up()
    {
        Schema::table('zhafri_coursemaker_quiz', function($table)
        {
            $table->renameColumn('quiz_id', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('zhafri_coursemaker_quiz', function($table)
        {
            $table->renameColumn('id', 'quiz_id');
        });
    }
}
