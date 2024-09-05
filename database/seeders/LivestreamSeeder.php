<?php

namespace Database\Seeders;

use App\Models\Livestream;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LivestreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 12; $i++) {
            Livestream::create(['nama' => "judul " . $i, 'embed' => "https://www.youtube.com/embed/OISKG-EjXQ4?si=GwDSQuc6nd4Uhqks"]);
        }
    }
}
