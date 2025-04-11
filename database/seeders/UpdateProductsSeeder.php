<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UpdateProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')
            ->where('id', 1)
            ->update(['brandid' => 1]);
        
        DB::table('products')
            ->where('id', 2)
            ->update(['brandid' => 1]);
            
        DB::table('products')
            ->where('id', 3)
            ->update(['brandid' => 1]);
    }
}
