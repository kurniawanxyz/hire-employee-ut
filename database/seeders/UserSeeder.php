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
            'email' => config('app.admin_email'),
            'customer_email' => config('app.admin_email'),
            'no_telp' => "6222222222222",
            'password' => Hash::make("admin-ini"),
        ]);

        User::create([
            'name' => 'customer',
            'email' => config('app.customer_email'),
            'customer_email' => "kurniawanadi4556@gmail.com",
            'no_telp' => "622139945233",
            'password' => Hash::make("customer-ini")
        ]);
    }
}
