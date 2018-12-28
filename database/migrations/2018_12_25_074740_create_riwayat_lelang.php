<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatLelang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelelangan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_item')->nullable();
            $table->string('file', 150);
             $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('post', function(Blueprint $kolom){
            $kolom->foreign('id_item');
            $kolom->references('id');
            $kolom->On('item');
            $kolom->onDelete('cascade');
            $kolom->onUpdate('cascade');
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelelangan');
    }

}
