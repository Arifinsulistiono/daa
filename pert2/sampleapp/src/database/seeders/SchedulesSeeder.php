<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedules;
use Illuminate\Support\Facades\App;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'CR 401',
            'CR 501',
            'CR 601',
            'CR 701',
            'CR 801',
            'CR 901'
        ];

        foreach ($data as $dataclass){
            Schedules::firstOrCreate([
                'name' => $dataclass
            ]);
        }
    }
}
