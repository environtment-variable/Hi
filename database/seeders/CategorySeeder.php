<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category' => 'Teknologi'],
            ['category' => 'Sains'],
            ['category' => 'Fiksi'],
            ['category' => 'Sejarah'],
            ['category' => 'Filosofi'],
        ];

        DB::table('categories')->insert($categories);
    }
}
