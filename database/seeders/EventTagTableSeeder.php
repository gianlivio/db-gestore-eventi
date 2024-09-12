<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('event_tag')->insert([
            ['event_id' => 1, 'tag_id' => 1], // Concerto Rock - Musica
            ['event_id' => 2, 'tag_id' => 2], // Partita di Calcio - Sport
            ['event_id' => 3, 'tag_id' => 4]  // Fiera della Tecnologia - Tecnologia
        ]);
    }
}
