<?php

use Illuminate\Support\Facades\Hash;
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
            ['id' => 1, 'username' => "brookesy", 'password' => Hash::make("12345678")],
            ['id' => 2, 'username' => "tango", 'password' => Hash::make("12345678")],
            ['id' => 3, 'username' => "bob", 'password' => Hash::make("12345678")],
        ]);
    }
}
