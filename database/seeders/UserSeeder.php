<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //user 
        
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'role_id' => 1,
                'address'=> 'Dhaka',
                'phone_number'=> '01700000000',
                'email_verified_at' => now(),
                'created_at' => now(),
               

            ],
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
                'address'=> 'Dhaka',
                'phone_number'=> '01700000000',
                'email_verified_at' => now(),
                'created_at' => now(),
                
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
