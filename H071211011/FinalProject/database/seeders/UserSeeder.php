<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123')
        ])->assignRole('admin');

        User::create([
            'name' => 'member',
            'email' => 'member@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123')
        ])->assignRole('member');

        User::create([
            'name' => 'member2',
            'email' => 'member2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123')
        ])->assignRole('member');

        User::create([
            'name' => 'member3',
            'email' => 'member3@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123')
        ])->assignRole('member');

        User::create([
            'name' => 'member4',
            'email' => 'member4@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123')
        ])->assignRole('member');
        
        User::create([
            'name' => 'member5',
            'email' => 'member5@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123')
        ])->assignRole('member');

        User::create([
            'name' => 'member6',
            'email' => 'member6@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123')
        ])->assignRole('member');
        
        User::create([
            'name' => 'member7',
            'email' => 'member7@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123')
        ])->assignRole('member');
        

        User::create([
            'name' => 'public',
            'email' => 'public@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123')
        ])->assignRole('public_user');
    }
}
