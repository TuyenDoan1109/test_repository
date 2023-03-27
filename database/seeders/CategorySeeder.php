<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Phone',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tablet',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Stereo',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Smart Watch',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Smart Home',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tivi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'PC & Laptop Accessories',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Smartphone Accessories',
                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);
    }
}
