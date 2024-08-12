<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'address'=>'NewYork',
            'phone'=>'+01-3-8888-6868',
            'email'=>'hello@colorlib.com',
            'opentime'=>'10:00 am to 23:00 pm',
            'facebook'=>'hellocolorlib',
            'twitter'=>'hellocolorlib',
            'linkedin'=>'hellocolorlib'
        ]);
    }
}
