<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'title' => 'Concerto Rock',
                'description' => 'Un concerto rock in città',
                'date' => '2024-10-01 20:00:00',
                'location_id' => 1 // Location A
            ],
            [
                'title' => 'Partita di Calcio',
                'description' => 'Partita amichevole di calcio',
                'date' => '2024-11-05 15:00:00',
                'location_id' => 2 // Location B
            ],
            [
                'title' => 'Fiera della Tecnologia',
                'description' => 'Esposizione di innovazioni tecnologiche',
                'date' => '2024-12-20 10:00:00',
                'location_id' => 3 // Location C
            ]
        ]);
    }
}
