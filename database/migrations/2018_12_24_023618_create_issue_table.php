<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue', function (Blueprint $table) {
            $table->increments('Номер записи');
            $table->integer('Номер читателя');
            $table->integer('Номер библиотекаря');
            $table->integer('Номер книги');
            $table->boolean('Состояние')->default(true);
            $table->timestamps();

        });

//        Schema::table('issue', function (Blueprint $table) {
//           $table->foreign('Номер читателя')->references('Номер читателя')->on('reader');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issue');
    }
}
