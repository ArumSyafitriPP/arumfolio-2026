<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([

            'name' => 'Arum Syafitri Puspita Pratiwi',
            'role' => 'Informatics Student',
            'description' => 'Saya adalah seorang mahasiswa Teknik Informatika yang adaptif, logis, dan memiliki ketertarikan besar pada pengembangan teknologi masa kini.',
            'photo' => null,
            'tech_stack' => [
                'Laravel',
                'Filament',
                'MariaDB',
                'Web Development',
            'project_title' => 'Project Showcase',
            'project_subtitle' => 'Project yang sedang saya kerjakan',
            ],

        ]);
    }
}