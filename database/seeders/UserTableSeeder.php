<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                [
                    'id' => (string) Str::uuid(),
                    'avatar' => '/default/default.jpg',
                    'firstname' => 'Company',
                    'lastname' => 'CompanyAdmin',
                    'username' => 'CompanyAdmin',
                    'email' => 'company@gmail.com',
                    'role' => 'company',
                    'password' => Hash::make('password'),
                    'status' => 1,
                ],
                [
                    'id' => (string) Str::uuid(),
                    'avatar' => '/default/default.jpg',
                    'firstname' => 'Candidate',
                    'lastname' => 'CandidateUser',
                    'username' => 'CandidateUser',
                    'email' => 'candidate@gmail.com',
                    'role' => 'candidate',
                    'password' => Hash::make('password'),
                    'status' => 1,
                ]
            ]
        );
    }

}
