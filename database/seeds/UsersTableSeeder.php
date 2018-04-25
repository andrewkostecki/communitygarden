<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => 'name',
            'systemID' => 1,
            'email' => 'name@mail.com',
            'imageFileName' => 'name.png',
            'password' => bcrypt('name'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Andrew',
            'systemID' => 2,
            'email' => 'andrew@mail.com',
            'imageFileName' => 'andrew.png',
            'password' => bcrypt('andrew'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
