<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'image' => 'projects/project1.png',
            'short_description' =>
                'Sistem monitoring service elektronik berbasis web.',
            'description' =>
                'Sistem monitoring service elektronik berbasis Laravel dan Filament untuk monitoring progress service pelanggan.',
            'tech_stack' =>
                'Laravel, Filament, MariaDB, Docker',
        ]);
    }
}
