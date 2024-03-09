<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Saravanan',
                'email' => 'saravanan@mail.com',
                'password' => Hash::make('Test1234'),
            ],
        ];
    
        DB::table('users')->insert($users);
    }
}
