<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipment;
use App\Models\Laboratories;

class EquipmentSeeder extends Seeder
{
    public function run(): void
    {
        Equipment::factory()->count(50)->create();

        Laboratories::factory()->count(1)->create();
    }
}