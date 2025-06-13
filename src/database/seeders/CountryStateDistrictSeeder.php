<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Gujarat\LocationData\Models\Country;
use Gujarat\LocationData\Models\State;
use Gujarat\LocationData\Models\District;

class CountryStateDistrictSeeder extends Seeder
{
    public function run(): void
    {
        $country = Country::firstOrCreate(
            ['name' => 'India'],
            ['local_name' => 'ભારત']
        );

        $state = State::firstOrCreate(
            ['name' => 'Gujarat'],
            [
                'local_name' => 'ગુજરાત',
                'state_code' => '24',
                'country_id' => $country->id,
            ]
        );

        $districts = [
            ["name" => "Ahmedabad", "local_name" => "અમદાવાદ", "district_code" => "07"],
            ["name" => "Amreli", "local_name" => "અમરેલી", "district_code" => "13"],
            ["name" => "Anand", "local_name" => "આણંદ", "district_code" => "15"],
            ["name" => "Arvalli", "local_name" => "અરવલ્લી", "district_code" => "33"],
            ["name" => "Banas Kantha", "local_name" => "બનાસકાંઠા", "district_code" => "02"],
            ["name" => "Bharuch", "local_name" => "ભરૂચ", "district_code" => "21"],
            ["name" => "Bhavnagar", "local_name" => "ભાવનગર", "district_code" => "14"],
            ["name" => "Botad", "local_name" => "બોટાદ", "district_code" => "30"],
            ["name" => "Chhotaudepur", "local_name" => "છોટાઉદેપુર", "district_code" => "32"],
            ["name" => "Dahod", "local_name" => "દાહોદ", "district_code" => "18"],
            ["name" => "Dangs", "local_name" => "ડાંગ", "district_code" => "23"],
            ["name" => "Devbhumi Dwarka", "local_name" => "દેવભૂમિ દ્વારકા", "district_code" => "31"],
            ["name" => "Gandhinagar", "local_name" => "ગાંધીનગર", "district_code" => "06"],
            ["name" => "Gir Somnath", "local_name" => "ગિર સોમનાથ", "district_code" => "29"],
            ["name" => "Jamnagar", "local_name" => "જામનગર", "district_code" => "10"],
            ["name" => "Junagadh", "local_name" => "જૂનાગઢ", "district_code" => "12"],
            ["name" => "Kachchh", "local_name" => "કચ્છ", "district_code" => "01"],
            ["name" => "Kheda", "local_name" => "ખેડા", "district_code" => "16"],
            ["name" => "Mahesana", "local_name" => "મહેસાણા", "district_code" => "04"],
            ["name" => "Mahisagar", "local_name" => "મહીસાગર", "district_code" => "34"],
            ["name" => "Morbi", "local_name" => "મોરબી", "district_code" => "28"],
            ["name" => "Narmada", "local_name" => "નર્મદા", "district_code" => "20"],
            ["name" => "Navsari", "local_name" => "નવસારી", "district_code" => "24"],
            ["name" => "Panch Mahals", "local_name" => "પંચમહાલ", "district_code" => "17"],
            ["name" => "Patan", "local_name" => "પાટણ", "district_code" => "03"],
            ["name" => "Porbandar", "local_name" => "પોરબંદર", "district_code" => "11"],
            ["name" => "Rajkot", "local_name" => "રાજકોટ", "district_code" => "09"],
            ["name" => "Sabar Kantha", "local_name" => "સાબરકાંઠા", "district_code" => "05"],
            ["name" => "Surat", "local_name" => "સુરત", "district_code" => "22"],
            ["name" => "Surendranagar", "local_name" => "સુરેન્દ્રનગર", "district_code" => "08"],
            ["name" => "Tapi", "local_name" => "તાપી", "district_code" => "26"],
            ["name" => "Vadodara", "local_name" => "વડોદરા", "district_code" => "19"],
            ["name" => "Valsad", "local_name" => "વલસાડ", "district_code" => "25"],
        ];

        foreach ($districts as $district) {
            District::firstOrCreate(
                ['name' => $district['name']],
                [
                    'local_name' => $district['local_name'],
                    'district_code' => $district['district_code'],
                    'country_id' => $country->id,
                    'state_id' => $state->id,
                    'state_code' => $state->state_code,
                ]
            );
        }
    }
}
