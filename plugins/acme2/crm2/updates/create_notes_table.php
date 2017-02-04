<?php namespace Acme2\Crm2\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('acme2_crm2_notes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('subject')->nullable();
            $table->text('content')->nullable();
            $table->integer('opportunity_id')->unsigned()->nullable()->index();
            $table->integer('owner_id')->unsigned()->nullable()->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acme2_crm2_notes');
    }
}
