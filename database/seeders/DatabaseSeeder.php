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
                'name' => 'Admin',
                'role'  => 1,
                'email' => 'admin@argon.com',
                'password' => bcrypt('admin123')
            ],
    );
    }
}
