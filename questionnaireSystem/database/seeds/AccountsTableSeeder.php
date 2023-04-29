<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            ['id' => 1, 'username' => "brookesy", 'password' => "12345678"],
            ['id' => 2, 'username' => "tango", 'password' => "12345678"],
            ['id' => 3, 'username' => "bob", 'password' => "12345678"],
        ]);
    }
}
