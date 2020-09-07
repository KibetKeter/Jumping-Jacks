<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin user
        DB::table('users')->insert([
            'name' => 'John Mwaura',
            'email' => 'johnmwaura@example.com',
            'password' => Hash::make('123456'),
            'roleId' => 1,//administrator
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //GeneralUser
        DB::table('users')->insert([
          'name' => 'Brian Mumwia',
          'email' => 'brianmumwia@example.com',
          'password' => Hash::make('123456'),
          'roleId' => 2,//GeneralUser
          'created_at' => now(),
          'updated_at' => now()
        ]);


    }
}
