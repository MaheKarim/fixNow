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
            'courier_type_name' => 'Fix For Me',
        ]);
        CourierType::updateOrCreate([
            'courier_type_name' => 'Check For Me',
        ]);
    }
}
