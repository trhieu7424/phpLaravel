<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 15; $i++) {
            DB::table('products')->insert([
                'proname' => 'Sản phẩm '.$i,  // Tên sản phẩm
                'price' => rand(150000, 500000),  // Giá ngẫu nhiên từ 150k-500k
                'cateid' => rand(1, 9),  // ID danh mục ngẫu nhiên từ 1-9
                'brandid' => rand(1, 9),  // ID thương hiệu ngẫu nhiên từ 1-9
                'description' => 'Mô tả sản phẩm '.$i,
                'created_at' => now(),  // Thời gian tạo
                'updated_at' => now()   // Thời gian cập nhật
            ]);
        }
    }
}
