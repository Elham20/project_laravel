<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\cuves;
use App\Models\cuverie;
class CuveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cuves::create(['nom_cuve' => 'Cuve 1', 'volume_max' => 1000]);
        Cuves::create(['nom_cuve' => 'Cuve 2', 'volume_max' => 2000]);
        Cuves::create(['nom_cuve' => 'Cuve 1', 'volume_max' => 1000, 'cuverie_id' => 1]);
        Cuves::create(['nom_cuve' => 'Cuve 2', 'volume_max' => 2000, 'cuverie_id' => 1]);
        Cuves::create(['nom_cuve' => 'Cuve 3', 'volume_max' => 1500, 'cuverie_id' => 2]);
    }
}
