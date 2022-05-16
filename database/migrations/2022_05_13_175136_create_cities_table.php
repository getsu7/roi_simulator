<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('cities');
        
        Schema::enableForeignKeyConstraints();

        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city')->unique();
            $table->foreign('country_id')->constrained('id')->on('countries')->onDelete();
            $table->unsignedBigInteger('user_id')->constrained('id')->on('users');
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
        Schema::dropIfExists('cities');
    }
};
