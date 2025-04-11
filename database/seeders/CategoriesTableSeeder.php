<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['catename' => 'Điện thoại', 'description' => 'Các loại điện thoại'],
            ['catename' => 'Laptop', 'description' => 'Các loại laptop'],
            ['catename' => 'Phụ kiện', 'description' => 'Các phụ kiện điện tử'],
        ]);
    }
}
