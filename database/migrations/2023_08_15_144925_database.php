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
            $table->string('ver')->default('none');
            $table->string('info')->default('none');
            $table->string('size')->default('undetected');
            $table->string('req')->default('no-requerements');
            $table->string('download');
            $table->string('icon')->default('https://icons.veryicon.com/png/o/miscellaneous/myicon-1/none-1.png');
        });

        Schema::create(table:'Kategori',callback:function(Blueprint $table){
            $table->id();
            $table->string('category');
            $table->string('background');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Software');
        Schema::dropIfExists('Kategori');
    }
}
