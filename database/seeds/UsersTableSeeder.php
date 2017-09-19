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
//        DB::table('users')->insert([
//            'name' => 'Roman',
//            'email' => 'romans@liantechltd.com',
//            'password' => 'dikm443512'
//        ]);
        DB::table('users')->insert([
            'name' => 'Polina',
            'email' => 'polinas@liantechltd.com',
            'password' => bcrypt('1234')
        ]);
    }
}
