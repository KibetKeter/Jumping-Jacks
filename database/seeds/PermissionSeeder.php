<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //The various permissions
        DB::table('permissions')->insert([
            'name' => 'Insert Supplier Details',
            'slug' => 'insert-supplier-details',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'Insert Donor Details',
            'slug' => 'insert-donor-details',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'Insert Stock Details',
            'slug' => 'insert-stock-details',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'Insert Money Donation',
            'slug' => 'insert-money-donation',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'View Remainig Stock',
            'slug' => 'view-remaining-stock',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'Make Order',
            'slug' => 'make-order',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'View Order',
            'slug' => 'view-order',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Stock',
            'slug' => 'edit-stock',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'View Supplier Details',
            'slug' => 'view-supplier-details',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'View Donor Details',
            'slug' => 'view-donor-details',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'Manage Accouts',
            'slug' => 'manage-accounts',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permissions')->insert([
            'name' => 'Make Accounts',
            'slug' => 'make-accounts',
            'created_at' => now(),
            'updated_at' => now()
        ]);









    }
}
