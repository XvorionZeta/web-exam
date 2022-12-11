<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'username' => 'admin',
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'role'  => 1,
                'email' => 'admin@argon.com',
                'password' => bcrypt('admin123')
            ],
            [
                'username' => 'user',
                'firstname' => 'user',
                'lastname' => '1',
                'role'  => 2,
                'email' => 'user1@gmail.com',
                'password' => bcrypt('user123')
            ],
            [
                'username' => 'admin',
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'role'  => 1,
                'email' => 'admin@argon.com',
                'password' => bcrypt('admin123')
            ],
    );
    }
}
