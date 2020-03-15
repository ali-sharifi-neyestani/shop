<?php

use Illuminate\Database\Seeder;
use \App\Models\Color;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $records = [
            [
                'name' => 'Black'
            ],
            [
                'name' => 'White'
            ],
            [
                'name' => 'Silver'
            ],
            [
                'name' => 'Gold'
            ],
            [
                'name' => 'Pink'
            ]
        ];

        foreach ($records as $record)
            Color::create($record);

    }
}
