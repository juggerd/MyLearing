<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('name');
<<<<<<< HEAD
            $table->string('patronymic');
            $table->date('birthday');
=======
            $table->string('patronymic')->nullable();
            $table->integer('age')->default(18);
>>>>>>> d8cf3c23698c508ba76442e5322a7d26808a7e37
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
        Schema::dropIfExists('clients');
    }
}
