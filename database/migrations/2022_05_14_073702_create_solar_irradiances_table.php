<?php

use App\Models\City;
use App\Models\Month;
use App\Models\User;
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
        Schema::dropIfExists('solar_irradiances');

        Schema::enableForeignKeyConstraints();

        Schema::create('solar_irradiances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('month_id');
            $table->unsignedBigInteger('city_id');
            for($i = 0; $i <= 23; $i++) {
                $table->float($i, 6, 2);
            }
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('month_id')->references('id')->on('months');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solar_irradiances');
    }
};
