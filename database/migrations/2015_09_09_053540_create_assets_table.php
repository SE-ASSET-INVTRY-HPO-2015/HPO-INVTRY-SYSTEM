<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brands_id')->unsigned()->index();
            $table->string('model');
            $table->integer('categories_id')->unsigned()->index();
            $table->string('description');
            $table->integer('control_number');
            $table->integer('serial_number');
            $table->integer('physicalstatuses_id')->unsigned()->index();
            $table->integer('deployments_id')->unsigned()->index();
            $table->integer('warranties_id')->unsigned()->index();
            $table->timestamp('warranty_end');
            $table->timestamps();

            $table->foreign('brands_id')
                  ->references('id')
                  ->on('brands')
                  ->onDelete('cascade');

            $table->foreign('categories_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');

            $table->foreign('physicalstatuses_id')
                  ->references('id')
                  ->on('physicalstatuses')
                  ->onDelete('cascade');

            $table->foreign('deployments_id')
                  ->references('id')
                  ->on('deployments')
                  ->onDelete('cascade');

            $table->foreign('warranties_id')
                  ->references('id')
                  ->on('warranties')
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
        Schema::drop('assets');
    }
}
