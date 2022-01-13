<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'Renee Mckelvey',
            'email' => 'admin@admin.com',
            'type' => false,
            'password' => Hash::make('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Oliver Jake',
            'email' => 'user@user.com',
            'type' => true,
            'password' => Hash::make('secret'),
        ]);
    }
}
