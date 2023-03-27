<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_name = [
            'Phone',
            'Laptop',
            'Tablet'
        ];
        $subcategory_name = [
            'iOS Phone',
            'Android Phone',
            'Gaming Laptop',
            'Office Laptop',
            'iOS Tablet',
            'Android Tablet'
        ];
        $brand_name = [
            'Apple',
            'Samsung',
            'Dell'
        ];
        $sizes = [
            '4G/64G',
            '6G/128G',
            '8G/256G'
        ];

        // iOS Phones
        $iosPhones = ['Iphone 12', 'Iphone 13', 'Iphone 14'];
        for($k = 0; $k < count($iosPhones); $k++) {
            for($i = 0; $i < 3; $i++) {
                for($j = 0; $j < 3; $j++) {
                    switch ([$iosPhones[$k], $sizes[$i]]) {
                        case ['Iphone 12', '4G/64G']:
                            $price = 19990000;
                            $discount_price = 15190000;
                            $image = 'image_' . strtolower($iosPhones[$k]) . '.png';
                            break;
                        case ['Iphone 12', '6G/128G']:
                            $price = 19990000;
                            $discount_price = 15190000;
                            $image = 'image_' . strtolower($iosPhones[$k]) . '.png';
                            break;
                        case ['Iphone 12', '8G/256G']:
                            $price = 19990000;
                            $discount_price = 15190000;
                            $image = 'image_' . strtolower($iosPhones[$k]) . '.png';
                            break;

                        case ['Iphone 13', '4G/64G']:
                            $price = 24990000;
                            $discount_price = 17990000;
                            $image = 'image_' . strtolower($iosPhones[$k]) . '.png';
                            break;
                        case ['Iphone 13', '6G/128G']:
                            $price = 27990000;
                            $discount_price = 21490000;
                            $image = 'image_' . strtolower($iosPhones[$k]) . '.png';
                            break;
                        case ['Iphone 13', '8G/256G']:
                            $price = 34990000;
                            $discount_price = 27190000;
                            $image = 'image_' . strtolower($iosPhones[$k]) . '.png';
                            break;

                        case ['Iphone 14', '4G/64G']:
                            $price = 24990000;
                            $discount_price = 19990000;
                            $image = 'image_' . strtolower($iosPhones[$k]) . '.png';
                            break;
                        case ['Iphone 14', '6G/128G']:
                            $price = 27990000;
                            $discount_price = 23190000;
                            $image = 'image_' . strtolower($iosPhones[$k]) . '.png';
                            break;
                        case ['Iphone 14', '8G/256G']:
                            $price = 27990000;
                            $discount_price = 23490000;
                            $image = 'image_' . strtolower($iosPhones[$k]) . '.png';
                            break;
                    }
                    Product::create([
                        'category_id' => 1,
                        'subcategory_id' => 1,
                        'brand_id' => 1,
                        'name' => $iosPhones[$k],
                        'code' => '1111',
                        'quantity' => '50',
                        'size' => $sizes[$i],
                        'price' => $price,
                        'discount_price' => $discount_price,
                        'detail' => 'product_detail',
                        'image' => $image,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
            }
        }

        // Android Phones
        $androidPhones = ['Galaxy 20', 'Galaxy 22', 'Galaxy 23'];
        for($k = 0; $k < count($androidPhones); $k++) {
            for($i = 0; $i < 3; $i++) {
                for($j = 0; $j < 3; $j++) {
                    switch ([$androidPhones[$k], $sizes[$i]]) {
                        case ['Galaxy 20', '4G/64G']:
                            $price = 16990000;
                            $discount_price = 11490000;
                            $image = 'image_' . strtolower($androidPhones[$k]) . '.png';
                            break;
                        case ['Galaxy 20', '6G/128G']:
                            $price = 21990000;
                            $discount_price = 16350000;
                            $image = 'image_' . strtolower($androidPhones[$k]) . '.png';
                            break;
                        case ['Galaxy 20', '8G/256G']:
                            $price = 23990000;
                            $discount_price = 17790000;
                            $image = 'image_' . strtolower($androidPhones[$k]) . '.png';
                            break;

                        case ['Galaxy 22', '4G/64G']:
                            $selling_price = 21990000;
                            $discount_price = 16350000;
                            $image = 'image_' . strtolower($androidPhones[$k]) . '.png';
                            break;
                        case ['Galaxy 22', '6G/128G']:
                            $selling_price = 23490000;
                            $discount_price = 17790000;
                            $image = 'image_' . strtolower($androidPhones[$k]) . '.png';
                            break;
                        case ['Galaxy 22', '8G/256G']:
                            $selling_price = 27490000;
                            $discount_price = 21690000;
                            $image = 'image_' . strtolower($androidPhones[$k]) . '.png';
                            break;

                        case ['Galaxy 23', '4G/64G']:
                            $selling_price = 30990000;
                            $discount_price = 24990000;
                            $image = 'image_' . strtolower($androidPhones[$k]) . '.png';
                            break;
                        case ['Galaxy 23', '6G/128G']:
                            $selling_price = 33990000;
                            $discount_price = 25490000;
                            $image = 'image_' . strtolower($androidPhones[$k]) . '.png';
                            break;
                        case ['Galaxy 23', '8G/256G']:
                            $selling_price = 34990000;
                            $discount_price = 26990000;
                            $image = 'image_' . strtolower($androidPhones[$k]) . '.png';
                            break;
                    }
                    Product::create([
                        'category_id' => 1,
                        'subcategory_id' => 2,
                        'brand_id' => 2,
                        'name' => $androidPhones[$k],
                        'code' => '1111',
                        'quantity' => '50',
                        'size' => $sizes[$i],
                        'price' => $price,
                        'discount_price' => $discount_price,
                        'detail' => 'product_detail',
                        'image' => $image,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
            }
        }

        // Gaming Laptops
        $gamingLaptops = ['Gaming Dell 1', 'Gaming Dell 2', 'Gaming Dell 3'];
        for($k = 0; $k < count($gamingLaptops); $k++) {
            for($i = 0; $i < 3; $i++) {
                for($j = 0; $j < 3; $j++) {
                    switch ([$gamingLaptops[$k], $sizes[$i]]) {
                        case ['Gaming Dell 1', '4G/64G']:
                            $price = 43990000;
                            $discount_price = 39990000;
                            $image = 'image_' . strtolower($gamingLaptops[$k]) . '.png';
                            break;
                        case ['Gaming Dell 1', '6G/128G']:
                            $price = 44990000;
                            $discount_price = 40990000;
                            $image = 'image_' . strtolower($gamingLaptops[$k]) . '.png';
                            break;
                        case ['Gaming Dell 1', '8G/256G']:
                            $price = 45990000;
                            $discount_price = 41990000;
                            $image = 'image_' . strtolower($gamingLaptops[$k]) . '.png';
                            break;

                        case ['Gaming Dell 2', '4G/64G']:
                            $price = 39990000;
                            $discount_price = 36990000;
                            $image = 'image_' . strtolower($gamingLaptops[$k]) . '.png';
                            break;
                        case ['Gaming Dell 2', '6G/128G']:
                            $price = 40990000;
                            $discount_price = 37990000;
                            $image = 'image_' . strtolower($gamingLaptops[$k]) . '.png';
                            break;
                        case ['Gaming Dell 2', '8G/256G']:
                            $price = 41990000;
                            $discount_price = 38990000;
                            $image = 'image_' . strtolower($gamingLaptops[$k]) . '.png';
                            break;

                        case ['Gaming Dell 3', '4G/64G']:
                            $price = 25990000;
                            $discount_price = 19990000;
                            $image = 'image_' . strtolower($gamingLaptops[$k]) . '.png';
                            break;
                        case ['Gaming Dell 3', '6G/128G']:
                            $price = 26990000;
                            $discount_price = 20990000;
                            $image = 'image_' . strtolower($gamingLaptops[$k]) . '.png';
                            break;
                        case ['Gaming Dell 3', '8G/256G']:
                            $price = 27990000;
                            $discount_price = 21990000;
                            $image = 'image_' . strtolower($gamingLaptops[$k]) . '.png';
                            break;
                    }
                    Product::create([
                        'category_id' => 2,
                        'subcategory_id' => 3,
                        'brand_id' => 3,
                        'name' => $gamingLaptops[$k],
                        'code' => '1111',
                        'quantity' => '50',
                        'size' => $sizes[$i],
                        'price' => $price,
                        'discount_price' => $discount_price,
                        'detail' => 'product_detail',
                        'image' => $image,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
            }
        }

        // Office Laptop
        $officeLaptops = ['Office Dell 1', 'Office Dell 2', 'Office Dell 3'];
        for($k = 0; $k < count($officeLaptops); $k++) {
            for($i = 0; $i < 3; $i++) {
                for($j = 0; $j < 3; $j++) {
                    switch ([$officeLaptops[$k], $sizes[$i]]) {
                        case ['Office Dell 1', '4G/64G']:
                            $price = 20990000;
                            $discount_price = 19790000;
                            $image = 'image_' . strtolower($officeLaptops[$k]) . '.png';
                            break;
                        case ['Office Dell 1', '6G/128G']:
                            $price = 21990000;
                            $discount_price = 20790000;
                            $image = 'image_' . strtolower($officeLaptops[$k]) . '.png';
                            break;
                        case ['Office Dell 1', '8G/256G']:
                            $price = 22990000;
                            $discount_price = 21790000;
                            $image = 'image_' . strtolower($officeLaptops[$k]) . '.png';
                            break;

                        case ['Office Dell 2', '4G/64G']:
                            $price = 25990000;
                            $discount_price = 23990000;
                            $image = 'image_' . strtolower($officeLaptops[$k]) . '.png';
                            break;
                        case ['Office Dell 2', '6G/128G']:
                            $price = 26990000;
                            $discount_price = 24990000;
                            $image = 'image_' . strtolower($officeLaptops[$k]) . '.png';
                            break;
                        case ['Office Dell 2', '8G/256G']:
                            $price = 27990000;
                            $discount_price = 25990000;
                            $image = 'image_' . strtolower($officeLaptops[$k]) . '.png';
                            break;

                        case ['Office Dell 3', '4G/64G']:
                            $price = 17090000;
                            $discount_price = 16590000;
                            $image = 'image_' . strtolower($officeLaptops[$k]) . '.png';
                            break;
                        case ['Office Dell 3', '6G/128G']:
                            $price = 18090000;
                            $discount_price = 17590000;
                            $image = 'image_' . strtolower($officeLaptops[$k]) . '.png';
                            break;
                        case ['Office Dell 3', '8G/256G']:
                            $price = 19090000;
                            $discount_price = 18590000;
                            $image = 'image_' . strtolower($officeLaptops[$k]) . '.png';
                            break;
                    }
                    Product::create([
                        'category_id' => 2,
                        'subcategory_id' => 4,
                        'brand_id' => 3,
                        'name' => $officeLaptops[$k],
                        'code' => '1111',
                        'quantity' => '50',
                        'size' => $sizes[$i],
                        'price' => $price,
                        'discount_price' => $discount_price,
                        'detail' => 'product_detail',
                        'image' => $image,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
            }
        }

        // iOS Tablet
        $ipads = ['Ipad 1', 'Ipad 2', 'Ipad 3'];
        for($k = 0; $k < count($ipads); $k++) {
            for($i = 0; $i < 3; $i++) {
                for($j = 0; $j < 3; $j++) {
                    switch ([$ipads[$k], $sizes[$i]]) {
                        case ['Ipad 1', '4G/64G']:
                            $price = 35990000;
                            $discount_price = 32990000;
                            $image = 'image_' . strtolower($ipads[$k]) . '.png';
                            break;
                        case ['Ipad 1', '6G/128G']:
                            $price = 36990000;
                            $discount_price = 33990000;
                            $image = 'image_' . strtolower($ipads[$k]) . '.png';
                            break;
                        case ['Ipad 1', '8G/256G']:
                            $price = 37990000;
                            $discount_price = 34990000;
                            $image = 'image_' . strtolower($ipads[$k]) . '.png';
                            break;

                        case ['Ipad 2', '4G/64G']:
                            $price = 30990000;
                            $discount_price = 28990000;
                            $image = 'image_' . strtolower($ipads[$k]) . '.png';
                            break;
                        case ['Ipad 2', '6G/128G']:
                            $price = 31990000;
                            $discount_price = 29990000;
                            $image = 'image_' . strtolower($ipads[$k]) . '.png';
                            break;
                        case ['Ipad 2', '8G/256G']:
                            $price = 32990000;
                            $discount_price = 30990000;
                            $image = 'image_' . strtolower($ipads[$k]) . '.png';
                            break;

                        case ['Ipad 3', '4G/64G']:
                            $price = 33990000;
                            $discount_price = 27990000;
                            $image = 'image_' . strtolower($ipads[$k]) . '.png';
                            break;
                        case ['Ipad 3', '6G/128G']:
                            $price = 34990000;
                            $discount_price = 28990000;
                            $image = 'image_' . strtolower($ipads[$k]) . '.png';
                            break;
                        case ['Ipad 3', '8G/256G']:
                            $price = 35990000;
                            $discount_price = 29990000;
                            $image = 'image_' . strtolower($ipads[$k]) . '.png';
                            break;
                    }
                    Product::create([
                        'category_id' => 3,
                        'subcategory_id' => 5,
                        'brand_id' => 1,
                        'name' => $ipads[$k],
                        'code' => '1111',
                        'quantity' => '50',
                        'size' => $sizes[$i],
                        'price' => $price,
                        'discount_price' => $discount_price,
                        'detail' => 'product_detail',
                        'image' => $image,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
            }
        }

        // Android Tablet
        $androidTablets = ['Galaxy Tab 1', 'Galaxy Tab 2', 'Galaxy Tab 3'];
        for($k = 0; $k < count($androidTablets); $k++) {
            for($i = 0; $i < 3; $i++) {
                for($j = 0; $j < 3; $j++) {
                    switch ([$androidTablets[$k], $sizes[$i]]) {
                        case ['Galaxy Tab 1', '4G/64G']:
                            $price = 27990000;
                            $discount_price = 23150000;
                            $image = 'image_' . strtolower($androidTablets[$k]) . '.png';
                            break;
                        case ['Galaxy Tab 1', '6G/128G']:
                            $price = 28990000;
                            $discount_price = 24150000;
                            $image = 'image_' . strtolower($androidTablets[$k]) . '.png';
                            break;
                        case ['Galaxy Tab 1', '8G/256G']:
                            $price = 29990000;
                            $discount_price = 25150000;
                            $image = 'image_' . strtolower($androidTablets[$k]) . '.png';
                            break;

                        case ['Galaxy Tab 2', '4G/64G']:
                            $price = 25990000;
                            $discount_price = 21250000;
                            $image = 'image_' . strtolower($androidTablets[$k]) . '.png';
                            break;
                        case ['Galaxy Tab 2', '6G/128G']:
                            $price = 26990000;
                            $discount_price = 22250000;
                            $image = 'image_' . strtolower($androidTablets[$k]) . '.png';
                            break;
                        case ['Galaxy Tab 2', '8G/256G']:
                            $price = 27990000;
                            $discount_price = 23250000;
                            $image = 'image_' . strtolower($androidTablets[$k]) . '.png';
                            break;

                        case ['Galaxy Tab 3', '4G/64G']:
                            $price = 13990000;
                            $discount_price = 9790000;
                            $image = 'image_' . strtolower($androidTablets[$k]) . '.png';
                            break;
                        case ['Galaxy Tab 3', '6G/128G']:
                            $price = 14990000;
                            $discount_price = 10790000;
                            $image = 'image_' . strtolower($androidTablets[$k]) . '.png';
                            break;
                        case ['Galaxy Tab 3', '8G/256G']:
                            $price = 15990000;
                            $discount_price = 11790000;
                            $image = 'image_' . strtolower($androidTablets[$k]) . '.png';
                            break;
                    }
                    Product::create([
                        'category_id' => 3,
                        'subcategory_id' => 6,
                        'brand_id' => 2,
                        'name' => $androidTablets[$k],
                        'code' => '1111',
                        'quantity' => '50',
                        'size' => $sizes[$i],
                        'price' => $price,
                        'discount_price' => $discount_price,
                        'detail' => 'product_detail',
                        'image' => $image,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
            }
        }
    }
}
