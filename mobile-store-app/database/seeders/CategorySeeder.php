<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            [
                "id"=>"iphone",
                "name"=>"iPhone",
            ],
            [
                "id"=>"ipad",
                "name"=>"iPad",
            ],
            [
                "id"=>"airpods",
                "name"=>"airPods",
            ],
            [
                "id"=>"watch",
                "name"=>"Watch",
            ],
            [
                "id"=>"macbook",
                "name"=>"Macbook",
            ],
        ]);
    }
}