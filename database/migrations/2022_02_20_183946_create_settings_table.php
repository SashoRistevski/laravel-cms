<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('mainurl');
            $table->string('email');
            $table->text('description');
            $table->string('logo');
            $table->string('address');
            $table->string('phone');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('skype');
            $table->string('linkedin');
            $table->string('youtube');
            $table->string('flickr');
            $table->string('pinterest');
            $table->foreignId('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->double('lat',20,10);
            $table->double('lng',20,10);
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
        Schema::dropIfExists('settings');
    }
}
