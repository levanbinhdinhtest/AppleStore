<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('carts')->insert([
        //     [
        //         "quantity"=>"2",
        //         "user_id"=>"2",
        //         "product_id"=>"ip11"
        //     ],
        //     [
        //         "quantity"=>"1",
        //         "user_id"=>"2",
        //         "product_id"=>"ip12"
        //     ],
        //     [
        //         "quantity"=>"2",
        //         "user_id"=>"3",
        //         "product_id"=>"ip14"
        //     ],
        //     [
        //         "quantity"=>"2",
        //         "user_id"=>"4",
        //         "product_id"=>"ip15"
        //     ],
        // ]);
    }
}