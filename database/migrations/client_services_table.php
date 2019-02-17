<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reestrs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reestrs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id')->index();
            $table->date('date_from');
            $table->date('date_to');
            $table->double('services_summ',6,2)->nullable();
            $table->integer('services_cont')->nullable();
            $table->timestamps();

            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients')
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
        Schema::dropIfExists('reestrs');
    }
}
