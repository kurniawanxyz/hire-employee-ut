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
            'password' => Hash::make("admin-ini")
        ]);

        User::create([
            'name' => 'customer',
            'email' => config('app.customer_email'),
            'password' => Hash::make("customer-ini")
        ]);
    }
}
