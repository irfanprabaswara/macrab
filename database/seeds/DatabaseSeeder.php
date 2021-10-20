<?php

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
        DB::table('users')->insert([
            'name' => 'superadmin',
            'vendor' => 'SuperadminVendor',
            'nip' => '123456',
            'email' => 'admin@gmail.com',
            'is_admin' => '2',
            'password' => '$2y$10$50o44v7HmsHSdcGBpCfLTe9bPoV4X6EypcPZYsln3mItfkKFGSNIi',
        ]);
    }
}
