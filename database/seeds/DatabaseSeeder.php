<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MinyakSeeder::class);
        $this->call(BumbuSeeder::class);
        $this->call(BulkExportSeeder::class);
        $this->call(SayurSeeder::class);
        $this->call(BumbuExportSeeder::class);
        $this->call(MonthSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(GroupsSeeder::class);
    }
}
