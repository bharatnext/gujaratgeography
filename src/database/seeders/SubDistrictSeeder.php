<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Gujarat\LocationData\Models\District;
use Gujarat\LocationData\Models\SubDistrict;

class SubDistrictSeeder extends Seeder
{
    public function run(): void
    {
        $districtSubDistrictMap = [
            'Rajkot' => [
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
            ],
            'Botad' => [
                ["name" => "Barwala", "local_name" => "બરવાળા", "sub_district_code" => "0010"],
                ["name" => "Botad", "local_name" => "બોટાદ", "sub_district_code" => "0001"],
                ["name" => "Gadhada", "local_name" => "ગઢડા", "sub_district_code" => "0003"],
                ["name" => "Ranpur", "local_name" => "રાણપુર", "sub_district_code" => "0009"],
            ],

            'Amreli' => [
                ["name" => "Kunkavav Vadia",   "local_name" => "કુંકાવાવ વડિયા",     "sub_district_code" => "0001"],
                ["name" => "Babra",            "local_name" => "બાબરા",              "sub_district_code" => "0002"],
                ["name" => "Lathi",            "local_name" => "લાઠી",               "sub_district_code" => "0003"],
                ["name" => "Lilia",            "local_name" => "લિલિયા",              "sub_district_code" => "0004"],
                ["name" => "Amreli",           "local_name" => "અમરેલી",             "sub_district_code" => "0005"],
                ["name" => "Bagasara",         "local_name" => "બગસરા",             "sub_district_code" => "0006"],
                ["name" => "Dhari",            "local_name" => "ધારી",               "sub_district_code" => "0007"],
                ["name" => "Savar Kundla",     "local_name" => "સાવરકુંડલા",         "sub_district_code" => "0008"],
                ["name" => "Khambha",          "local_name" => "ખાંભા",               "sub_district_code" => "0009"],
                ["name" => "Jafrabad",         "local_name" => "જાફરાબાદ",           "sub_district_code" => "0010"],
                ["name" => "Rajula",           "local_name" => "રાજુલા",             "sub_district_code" => "0011"],
            ],

        ];

        foreach ($districtSubDistrictMap as $districtName => $subDistricts) {
            $district = District::where('name', $districtName)->first();

            if (!$district) {
                echo "District {$districtName} not found.\n";
                continue;
            }

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
}
