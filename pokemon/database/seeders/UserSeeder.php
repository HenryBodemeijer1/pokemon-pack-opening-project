<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@test.com',
            'password' => Hash::make('usertest'),
            'is_admin' => 0
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admintest'),
            'is_admin' => 1
        ]);
    }
}
