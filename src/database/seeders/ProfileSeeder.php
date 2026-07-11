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
            'description' => 'Saya adalah mahasiswa Teknik Informatika yang adaptif, analitis, dan memiliki passion dalam pengembangan teknologi. Saya memiliki ketertarikan pada bidang Data Science,
             Artificial Intelligence (AI), serta Web Development, dengan fokus membangun solusi digital yang inovatif, terstruktur, dan relevan dengan kebutuhan masa kini.',
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