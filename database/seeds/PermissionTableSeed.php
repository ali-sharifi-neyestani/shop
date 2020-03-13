<?php

use Illuminate\Database\Seeder;
use \Spatie\Permission\PermissionRegistrar;
use  \Spatie\Permission\Models\Permission;

class PermissionTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('cache:clear');
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        Permission::create(['name' => 'manage_users']);
    }
}
