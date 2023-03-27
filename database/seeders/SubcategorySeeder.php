<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            [
                'name' => 'iOS Phone',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Android Phone',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Gaming Laptop',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Office Laptop',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iOS Tablet',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Android Tablet',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],


        ]);
    }
}
