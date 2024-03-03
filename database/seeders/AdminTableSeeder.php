<?php

    namespace Database\Seeders;

    use Hash;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Str;

    class AdminTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            DB::table('admins')->insert([
                [
                    'id' => (string)Str::uuid(),
                    'avatar' => '/default/default.jpg',
                    'firstname' => 'Super',
                    'lastname' => 'Admin',
                    'username' => 'SuperAdmin',
                    'email' => 'superadmin@gmail.com',
                    'password' => Hash::make('password'),
                    'status' => 1,
                ],
            ]);
        }
    }
