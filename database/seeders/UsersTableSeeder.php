<?php

    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;

    class UsersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            DB::table('users')->insert([
                    [
                        'id' => (string) Str::uuid(),
                        'firstname' => 'Website',
                        'lastname' => 'Admin',
                        'username' => 'Admin',
                        'email' => 'admin@gmail.com',
                        'role' => 'admin',
                        'password' => Hash::make('password'),
                        'status' => 'active',
                    ],
                    [
                        'id' => (string) Str::uuid(),
                        'firstname' => 'Website',
                        'lastname' => 'User',
                        'username' => 'User',
                        'email' => 'user@gmail.com',
                        'role' => 'user',
                        'password' => Hash::make('password'),
                        'status' => 'active',
                    ]
                ]
            );
        }
    }
