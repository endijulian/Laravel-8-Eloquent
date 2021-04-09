<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stadiums;

class StadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stadiums = [
            [
                'name' => 'Stamford Bridge',
                'capacity' => 430000,
                'address' => 'Stamford Bridge, Fulham Road, London, SW6 1HS',
                'created_at' => '2021-03-21 00:00:19',
                'updated_at' => '2021-03-21 00:00:10',
            ],
            [
                'name' => 'Emirates Stadiums',
                'capacity' => 44000,
                'address' => 'Stamford Bridge, Fulham Road, London, SW6 1HS',
                'created_at' => '2021-03-21 00:00:21',
                'updated_at' => '2021-03-21 00:00:20',
            ],
            [
                'name' => 'Stamford Bridge',
                'capacity' => 45000,
                'address' => 'Higboury House',
                'created_at' => '2021-03-21 00:00:30',
                'updated_at' => '2021-03-21 00:00:50',
            ],
            [
                'name' => 'Old Traffold',
                'capacity' => 46000,
                'address' => 'Sir Match Buby',
                'created_at' => '2021-03-21 00:00:20',
                'updated_at' => '2021-03-21 00:00:40',
            ],
            [
                'name' => 'Etihad Stadiums',
                'capacity' => 47000,
                'address' => 'Etihad Stadiums',
                'created_at' => '2021-03-21 00:00:10',
                'updated_at' => '2021-03-21 00:00:40',
            ],
            [
                'name' => 'Anifield',
                'capacity' => 48000,
                'address' => 'Anifiled Road',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00'
            ]
        ];

        Stadiums::insert($stadiums);
    }
}
