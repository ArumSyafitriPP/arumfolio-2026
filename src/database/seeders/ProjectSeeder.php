<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([

            'title' => 'Sistem Monitoring Service Elektronik',

            'slug' => 'service-monitoring',

            'category' => 'Web Development',

            'image' => null,

            'short_description' =>
                'Sistem monitoring service elektronik berbasis web.',

            'description' =>
                'Sistem monitoring service elektronik berbasis Laravel dan Filament untuk monitoring progress service pelanggan.',

            'tech_stack' => [
                'Laravel',
                'Filament',
                'MariaDB',
                'Docker',
            ],

            'problem_analysis' =>
                'Proses pencatatan manual pada bengkel servis menyebabkan risiko kehilangan data dan sulit melacak status service.',

            'features' => [
                'Monitoring status service',
                'Dashboard admin',
                'Tracking progress',
                'Manajemen pelanggan',
            ],

            'architecture' =>
                'Sistem menggunakan Laravel, Filament, MariaDB dan Docker dengan konsep MVC.',

            'diagram' => null,

        ]);
    }
}