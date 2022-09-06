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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email')->unique();            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('convencional');
            $table->string('tigo');
            $table->string('claro');
            $table->string('facebook');
            $table->string('whatsapp');
            $table->string('instagram');
            $table->string('telegram');
            $table->string('twitter');
            $table->boolean('active');
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
        Schema::dropIfExists('clientes');
    }
};
