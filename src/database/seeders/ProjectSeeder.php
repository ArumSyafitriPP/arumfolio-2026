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

            'title' => 'Sistem Penerimaan Murid Baru Sekolah Dasar',

            'slug' => 'SPMB-SD',

            'category' => 'Web Development',

            'image' => null,

            'short_description' =>
                'Sistem Penerimaan Murid Baru Sekolah Dasar berbasis web untuk mengelola proses pendaftaran dan seleksi siswa baru.',

            'description' =>
                'Sistem Penerimaan Murid Baru Sekolah Dasar berbasis Laravel dan Filament yang digunakan untuk mengelola proses pendaftaran siswa baru, verifikasi data calon murid, serta monitoring proses penerimaan secara digital.',

            'tech_stack' => [
                'Laravel',
                'Filament',
                'MariaDB',
                'Docker',
            ],

            'problem_analysis' =>
                'Proses penerimaan murid baru yang masih dilakukan secara manual menyebabkan kesulitan dalam pengelolaan data calon siswa, proses verifikasi dokumen yang lambat, serta kurang efektifnya monitoring status pendaftaran.',

            'features' => [
                'Pendaftaran murid baru secara online',
                'Manajemen data calon siswa',
                'Verifikasi dokumen pendaftaran',
                'Dashboard admin sekolah',
                'Monitoring status penerimaan',
                'Pengelolaan data siswa diterima',
            ],

            'architecture' =>
                'Sistem menggunakan Laravel, Filament, MariaDB dan Docker dengan konsep MVC.',

            'diagram' => null,

        ]);
    }
}