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
        // $this->call(UsersTableSeeder::class);
        $this->call(DepartmentSeed::class);
        $this->call(TitleSeed::class);
        $this->call(SexSeed::class);
    }
}
