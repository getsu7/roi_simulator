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
        Schema::create('solar_irradiances', function (Blueprint $table) {
            $table->id();
            for($i = 0; $i <= 23; $i++) {
                $table->float($i, 6, 2);
            }
            $table->string('month');
            $table->string('city_country');
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
        Schema::dropIfExists('solar_irradiances');
    }
};
