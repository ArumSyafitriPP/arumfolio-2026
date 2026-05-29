<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    public function run(): void
    {
        ContactInfo::create([

            'title' => "Let's Work Together",

            'description' =>
                'Have a project in mind? I would love to hear about it.',

            'email' =>
                'arumsyafitri11@gmail.com',

            'phone' =>
                '081382238901',

            'location' =>
                'Indonesia',

        ]);
    }
}