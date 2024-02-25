<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRolesSeeder extends Seeder
{
    public function run()
    {
        // Inserting doctor role
        DB::table('user_roles')->insert([
            'role' => 'doctor',
            'keyword' => Hash::make('doc'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Inserting lab technician role
        DB::table('user_roles')->insert([
            'role' => 'lab technician',
            'keyword' => Hash::make('lab'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
