<?php namespace Admin\Coursemaker\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('admin_coursemaker_lessons', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('course_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_coursemaker_lessons');
    }
}
