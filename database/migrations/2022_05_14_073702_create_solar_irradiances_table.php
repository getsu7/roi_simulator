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
            for($i = 0; $i <= 23; $i++) {
                $table->float($i, 6, 2);
            }
            $table->foreign('city_id')->constrained('id')->on('cities')->onDelete();
            $table->foreign('month_id')->constrained('id')->on('months');
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
        Schema::dropIfExists('solar_irradiances');
    }
};
