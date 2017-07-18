<?php

use Illuminate\Database\Seeder;

class TitleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("titles")->insert([
            ['name'=>'总经理','code'=>"GM"],
            ['name'=>'经理','code'=>"Manager"],
            ['name'=>'主管','code'=>"SUPERVISOR"],
            ['name'=>'职员','code'=>"STAFF"],
        ]);
    }
}
