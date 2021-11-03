<?php

namespace Database\Seeders;

use App\Models\lokasi;
use Illuminate\Database\Seeder;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        lokasi::create([
            'nm_lokasi' => "Jakarta",
        ]);
        lokasi::create([
            'nm_lokasi' => "Bandung",
        ]);
        lokasi::create([
            'nm_lokasi' => "Denpasar",
        ]);
        lokasi::create([
            'nm_lokasi' => "Semarang",
        ]);
        lokasi::create([
            'nm_lokasi' => "Yogyakarta",
        ]);
        lokasi::create([
            'nm_lokasi' => "Pelembang",
        ]);
    }
}
