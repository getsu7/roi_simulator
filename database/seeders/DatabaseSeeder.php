<?php

namespace Database\Seeders;

use App\Models\Month;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Month::create([
            'numeric_month' => 1,
            'month' => 'January'
        ]);
        Month::create([
            'numeric_month' => 2,
            'month' => 'February'
        ]);
        Month::create([
            'numeric_month' => 3,
            'month' => 'March'
        ]);
        Month::create([
            'numeric_month' => 4,
            'month' => 'April'
        ]);
        Month::create([
            'numeric_month' => 5,
            'month' => 'May'
        ]);
        Month::create([
            'numeric_month' => 6,
            'month' => 'June'
        ]);
        Month::create([
            'numeric_month' => 7,
            'month' => 'July'
        ]);
        Month::create([
            'numeric_month' => 8,
            'month' => 'August'
        ]);
        Month::create([
            'numeric_month' => 9,
            'month' => 'September'
        ]);
        Month::create([
            'numeric_month' => 10,
            'month' => 'October'
        ]);
        Month::create([
            'numeric_month' => 11,
            'month' => 'November'
        ]);
        Month::create([
            'numeric_month' => 12,
            'month' => 'December'
        ]);
    }
}
