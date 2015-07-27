<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('proj_name');
            $table->longText('proj_desc');
            $table->bigInteger('proj_owner');
            $table->integer('flag'); //1: created, 2:modified, 3:deleted.
            $table->integer('state');//0: NON ,1:started, 2, in coding, 3 in testing, 5 done, 6 blockd
            $table->date('start_date');
            $table->date('due_date');

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
        Schema::drop('projects');
    }
}
