<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Gujarat\LocationData\Models\District;
use Gujarat\LocationData\Models\SubDistrict;
use Illuminate\Support\Str;

class SubDistrictSeeder extends Seeder
{
    public function run(): void
    {
        $district = District::where('name', 'Rajkot')->first();
        $subDistricts = [
            ["name" => "Dhoraji", "local_name" => "ધોરાજી", "sub_district_code" => "0013"],
            ["name" => "Gondal", "local_name" => "ગોંડલ", "sub_district_code" => "0010"],
            ["name" => "Jamkandorna", "local_name" => "જામકંડોરણા", "sub_district_code" => "0011"],
            ["name" => "Jasdan", "local_name" => "જસદણ", "sub_district_code" => "0009"],
            ["name" => "Jetpur", "local_name" => "જેતપુર", "sub_district_code" => "0014"],
            ["name" => "Kotda Sangani", "local_name" => "કોટડા સાંગાણી", "sub_district_code" => "0008"],
            ["name" => "Lodhika", "local_name" => "લોધીકા", "sub_district_code" => "0007"],
            ["name" => "Paddhari", "local_name" => "પઢધરી", "sub_district_code" => "0005"],
            ["name" => "Rajkot", "local_name" => "રાજકોટ", "sub_district_code" => "0006"],
            ["name" => "Upleta", "local_name" => "ઉપલેટા", "sub_district_code" => "0012"],
            ["name" => "Vinchhiya", "local_name" => "વિંછીયા", "sub_district_code" => "0015"],
        ];

        foreach ($subDistricts as $subDistrict) {
            SubDistrict::firstOrCreate(
                ['name' => $subDistrict['name']],
                [
                    'local_name' => $subDistrict['local_name'],
                    'sub_district_code' => $subDistrict['sub_district_code'],
                    'state_code' => '24',
                    'district_code' => $district->district_code,
                    'country_id' => $district->country_id,
                    'state_id' => $district->state_id,
                    'district_id' => $district->id,
                ]
            );
        }
    }
}
