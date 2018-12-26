<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reader', function (Blueprint $table) {
            $table->increments('Номер читателя');
            $table->string('Паспорт', 10)->nullable()->unique();
            $table->string('Фамилия',50);
            $table->string('Имя',50);
            $table->string('Отчество',50);
            $table->string('Адрес');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reader');
    }
}
