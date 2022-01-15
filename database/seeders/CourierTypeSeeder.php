<?php

namespace Database\Seeders;

use App\Models\CourierType;
use Illuminate\Database\Seeder;

class CourierTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourierType::updateOrCreate([
            'courier_type_name' => 'Fix PHN Service',
        ]);
        CourierType::updateOrCreate([
            'courier_type_name' => 'Ship PHN Service',
        ]);
    }
}
