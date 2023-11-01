<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //adding data to database
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'paulmulwa101@gmail.com',
                'password' =>Hash::make('111'),
                'role' => 'admin',
                'status'=> 'active',


            ],
// Agent
            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@gmail.com',
                'password' =>Hash::make('0791'),
                'role' => 'agent',
                'status'=> 'active',

            ],
//user
[
    'name' => 'User',
    'username' => 'user',
    'email' => 'user@gmail.com',
    'password' =>Hash::make('0791'),
    'role' => 'user',
    'status'=> 'active',

],


                ]);

            }
        }
