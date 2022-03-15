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
        Schema::create('bilets', function (Blueprint $table) {
            $table->id('biletID')-> unique();
            $table->string('salon') -> nullable();
            $table->string('koltuk') -> nullable();
            $table->time('saat') -> nullable();
            $table->string('ucret') -> nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bilets');
    }
};
