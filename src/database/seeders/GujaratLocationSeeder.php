<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GujaratLocationSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CountryStateDistrictSeeder::class,
            SubDistrictSeeder::class,
            VillageSeeder::class,
        ]);
    }
}
