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
    DB::table('products')->insert([
        ['proname' => 'iPhone 15', 'price' => 25000000, 'description' => 'iPhone 15 128GB', 'cateid' => 1],
        ['proname' => 'MacBook Pro', 'price' => 35000000, 'description' => 'MacBook Pro M1', 'cateid' => 2],
        ['proname' => 'Tai nghe AirPods', 'price' => 5000000, 'description' => 'Tai nghe không dây', 'cateid' => 3],
    ]);
}
}
