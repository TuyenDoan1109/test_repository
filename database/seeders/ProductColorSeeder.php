<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 162; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                DB::table('product_color')->insert([
                    [
                        'product_id' => $i,
                        'color_id' => $j,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                ]);

            }
            if($j == 5) {
                $j = 1;
            }
        }
    }
}
