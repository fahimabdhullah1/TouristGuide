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
            'role_id' => '1',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'contact' => '0170000000',
            'email_verified_at' => '2021-01-01 21:18:10.000000',
            'password' => bcrypt('admin'),
            'created_at' => '2021-01-01 21:18:10.000000',
            'updated_at' => '2021-01-01 21:18:10.000000',
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'user',
            'email' => 'user@gmail.com',
            'contact' => '01712121212',
            'email_verified_at' => '2021-01-01 21:18:10.000000',
            'password' => bcrypt('user'),
            'created_at' => '2021-01-01 21:18:10.000000',
            'updated_at' => '2021-01-01 21:18:10.000000',
        ]);
    }
}
