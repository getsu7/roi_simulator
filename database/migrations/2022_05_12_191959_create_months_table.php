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
        Schema::dropIfExists('months');

        Schema::enableForeignKeyConstraints();

        Schema::create('months', function (Blueprint $table) {
            $table->id();
            $table->integer('numeric_month')->unique();
            $table->string('month')->unique();
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
        Schema::dropIfExists('months');
    }
};
