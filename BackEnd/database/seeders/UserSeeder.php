<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                "username" => "admin1",
                "first_name" => "Le Van",
                "last_name" => "Admin1",
                "email" => "admin1@gmail.com",
                "password" => Hash::make("admin"),
                "address" => "244 Tran Cao Van, Da Nang",
                "phone_number" => "0899902632",
                "role_id" => 1,
            ],
            [
                "username" => "customer1",
                "first_name" => "Le Thi",
                "last_name" => "Customer",
                "email" => "customer1@gmail.com",
                "password" => Hash::make("customer"),
                "address" => "245 Tran Cao Van, Da Nang",
                "phone_number" => "0899902632",
                "role_id" => 2,
            ],
            [
                "username" => "customer2",
                "first_name" => "Le Thi",
                "last_name" => "Customer",
                "email" => "customer2@gmail.com",
                "password" => Hash::make("customer"),
                "address" => "245 Tran Cao Van, Da Nang",
                "phone_number" => "0899902632",
                "role_id" => 2,
            ],
            [
                "username" => "customer3",
                "first_name" => "Le Thi",
                "last_name" => "Customer",
                "email" => "customer3@gmail.com",
                "password" => Hash::make("customer"),
                "address" => "245 Tran Cao Van, Da Nang",
                "phone_number" => "0899902632",
                "role_id" => 2,
            ],
        ]);
    }
}