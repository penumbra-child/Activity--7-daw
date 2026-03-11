<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsKitSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('robotics_kits')->insert([
            [    'name' => 'StarterKit',
                'description' => 'Incluye sensores y motores básicos',
            ],
            [
                'name' => 'Educational Robotics Kit',
                'description' => 'Incluye controladores y actuadores avanzados',
            ],
            [
                'name' => 'Kit5',
                'description' => 'Incluye componentes para proyectos complejos',
            ],

        ]);
    }
}
