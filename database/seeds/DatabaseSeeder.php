<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(ColorTableSeeder::class);

        $this->call(PermissionTableSeed::class);
        $this->call(RoleTableSeed::class);
        $this->call(UserTableSeed::class);
    }
}
