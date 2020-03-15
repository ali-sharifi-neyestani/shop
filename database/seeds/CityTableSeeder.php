<?php

use Illuminate\Database\Seeder;
use \App\Models\City;
class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
            [
                'title' => 'Arak'
            ],
            [
                'title' => 'Tehran'
            ],
            [
                'title' => 'Shiraz'
            ],
            [
                'title' => 'Isfahan'
            ]
        ];

        foreach ($records as $record)
            City::create($record);
    }
}
