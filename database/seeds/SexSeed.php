<?php

use Illuminate\Database\Seeder;

class SexSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sexes')->insert([
            ['name'=>'男','code'=>'M'],
            ['name'=>'女','code'=>'F'],
        ]);
    }
}
