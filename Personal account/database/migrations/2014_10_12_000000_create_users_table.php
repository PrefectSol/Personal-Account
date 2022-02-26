<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('email', 255)->nullable(false)->unique('email');
            $table->string('password', 255)->nullable(false);
            $table->string('fullname', 255)->nullable(false);
            $table->string('passportseries', 255)->nullable(false);
            $table->string('passportnumber', 255)->nullable(false);
            $table->string('whoisstringsuedthepassport', 255)->nullable(false);
            $table->string('dateofissueofthepassport', 255)->nullable(false);
            $table->string('gender', 255)->nullable(true);
            $table->string('country', 255)->nullable(true);
            $table->string('remember_token', 100)->nullable(true);
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
        Schema::dropIfExists('users');
    }
};
