<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Clubs;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->truncate();

        $clubs = [
            [
                'stadiums_id' => '1',
                'name' => 'Chealse FC',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
                'url' => 'www.chealseafc.com',
                'thropy' => 19,
                'created_at' => '2021-03-21 00:00:19',
                'updated_at' => '2021-03-21 00:00:10',
            ],
            [
                'stadiums_id' => '2',
                'name' => 'Arsenal',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t3.svg',
                'url' => 'www.arsenal.com',
                'thropy' => 8,
                'created_at' => '2021-03-21 00:00:21',
                'updated_at' => '2021-03-21 00:00:20',
            ],
            [
                'stadiums_id' => '3',
                'name' => 'Manchester United',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t1.svg',
                'url' => 'www.manutd.com',
                'thropy' => 20,
                'created_at' => '2021-03-21 00:00:30',
                'updated_at' => '2021-03-21 00:00:50',
            ],
            [
                'stadiums_id' => '4',
                'name' => 'Mancheter City',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t43.svg',
                'url' => 'www.mancity.com',
                'thropy' => 12,
                'created_at' => '2021-03-21 00:00:20',
                'updated_at' => '2021-03-21 00:00:40',
            ],
            [
                'stadiums_id' => '5',
                'name' => 'Liverpool',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t14.svg',
                'url' => 'www.liverpoolfc.com',
                'thropy' => 11,
                'created_at' => '2021-03-21 00:00:10',
                'updated_at' => '2021-03-21 00:00:40',
            ],
            [
                'stadiums_id' => '6',
                'name' => 'Tottenham Hotspur',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t6.svg',
                'url' => 'www.tottenhamhotspur.com',
                'thropy' => 1,
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00'
            ]
        ];

        Clubs::insert($clubs);
    }
}
