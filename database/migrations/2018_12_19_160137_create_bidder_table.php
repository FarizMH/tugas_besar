<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidder', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('fullname_bidder')->nullable();
            $table->string('email_bidder')->unique();
            $table->string('password_bidder');
            $table->text('alamat_bidder')->nullable();
            $table->string('no_KTP_bidder')->nullable();
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
        Schema::dropIfExists('bidder');
    }
}
