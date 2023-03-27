<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'Apple',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Samsung',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dell',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Oppo',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vivo',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nokia',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Realme',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Asus',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'HP',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Xiaomi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'SONY',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'MSI',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Acer',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'LG',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Gigabyte',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Intel',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Microsoft',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fujitsu',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Logitech',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Toshiba',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Lenovo',
                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);
    }
}
