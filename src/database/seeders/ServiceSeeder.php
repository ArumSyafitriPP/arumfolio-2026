<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'nama_customer' => 'Maysa',
            'nama_barang' => 'Kipas Angin Sharp',
            'keluhan' => 'Gamau muter baling-balingnya',
            'diagnosis' => 'Kerusakan pada dinamo',
            'status' => 'Process',
        ]);

    }
}
