<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deployments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('floors_id')->unsigned()->index();
            $table->integer('departments_id')->unsigned()->index();
            $table->integer('cubicles_id')->unsigned()->index();
            $table->integer('employees_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('floors_id')
                  ->references('id')
                  ->on('floors')
                  ->onDelete('cascade');

            $table->foreign('departments_id')
                  ->references('id')
                  ->on('departments')
                  ->onDelete('cascade');

            $table->foreign('cubicles_id')
                  ->references('id')
                  ->on('cubicles')
                  ->onDelete('cascade');

            $table->foreign('employees_id')
                  ->references('id')
                  ->on('employees')
                  ->onDelete('cascade');      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('deployments');
    }
}
