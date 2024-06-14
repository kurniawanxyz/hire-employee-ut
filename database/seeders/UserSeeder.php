<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Admin",
            'email' => "admin@utschool.sch.id",
            'customer_email' => "admin@utschool.sch.id",
            'no_telp' => "6222222222222",
            'password' => Hash::make("admin-ini"),
        ]);

        User::create([
            'name' => 'customer',
            'email' => "customer@utschool.sch.id",
            'customer_email' => "kurniawanadi4556@gmail.com",
            'no_telp' => "62895385285001",
            'password' => Hash::make("customer-ini")
        ]);
        User::create([
            'name' => 'PT PAMAPERSADA NUSANTARA',
            'email' => "pama@utschool.sch.id",
            'customer_email' => "kurniawanadi4556@gmail.com",
            'no_telp' => "62895385285001",
            'password' => Hash::make("customer-ini")
        ]);

        User::create([
            'name' => 'PT KALIMANTAN PRIMA PERSADA',
            'email' => "kpp@utschool.sch.id",
            'customer_email' => "kurniawanadi4556@gmail.com",
            'no_telp' => "62895385285001",
            'password' => Hash::make("customer-ini")
        ]);
        User::create([
            'name' => 'PT KANITRA MITRA JAYAUTAMA',
            'email' => "kamaju@utschool.sch.id",
            'customer_email' => "kurniawanadi4556@gmail.com",
            'no_telp' => "62895385285001",
            'password' => Hash::make("customer-ini")
        ]);
    }
}
