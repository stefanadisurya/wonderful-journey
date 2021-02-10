<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@google.com',
                'phone' => '087877889065',
                'role' => 'Admin',
                'password' => bcrypt('123456'),
                'remember_token' => Str::random(50),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Johnny Rotten',
                'email' => 'johnny@google.com',
                'phone' => '081345678910',
                'role' => 'User',
                'password' => bcrypt('123456'),
                'remember_token' => Str::random(50),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Sid Vicious',
                'email' => 'sid@google.com',
                'phone' => '081581203977',
                'role' => 'User',
                'password' => bcrypt('123456'),
                'remember_token' => Str::random(50),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
