<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            ['brandname' => 'Apple', 'description' => 'Tập đoàn công nghệ Apple'],
            ['brandname' => 'Samsung', 'description' => 'Tập đoàn công nghệ Samsung'],
            ['brandname' => 'Xiaomi', 'description' => 'Tập đoàn công nghệ Xiaomi'],
        ]);
    }
}
