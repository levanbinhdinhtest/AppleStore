<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('orders')->insert([
        //     [
        //         "order_date"=>"2024-09-12",
        //         "total_price"=>"iPhone",
        //         "user_id"=>"",
        //         "payment_id"=>""
        //     ],
        //     [
        //         "id"=>"ipad",
        //         "name"=>"iPad",
        //     ],
        //     [
        //         "id"=>"airpods",
        //         "name"=>"airPods",
        //     ],
        //     [
        //         "id"=>"watch",
        //         "name"=>"Watch",
        //     ],
        //     [
        //         "id"=>"macbook",
        //         "name"=>"Macbook",
        //     ],
        // ]);
    }
}