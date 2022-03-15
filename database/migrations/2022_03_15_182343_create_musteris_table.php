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
        Schema::create('musteris', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('ad');
            $table->string('soyad');
            $table->string('email');
            $table->string('filmid');
            $table->string('biletid');
            $table->rememberToken();        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musteris');
    }
};
