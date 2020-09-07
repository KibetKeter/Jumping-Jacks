<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Administrator
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //GeneralUser
        DB::table('roles')->insert([
            'name' => 'GeneralUser',
            'description' => 'GeneralUser',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        
    }
}
