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

        //supplier
        DB::table('roles')->insert([
            'name' => 'Supplier',
            'description' => 'Supplier',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Donor
        DB::table('roles')->insert([
            'name' => 'Donor',
            'description' => 'Donor',
            'isDonor' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
