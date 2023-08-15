<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Database extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Software',function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('ver');
            $table->string('info');
            $table->string('size');
            $table->string('req');
            $table->string('download');
            $table->string('icon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropDatabaseIfExists('Software');
    }
}
