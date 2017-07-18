<?php

use Illuminate\Database\Seeder;

class DepartmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("departments")->insert(
            [
                ['name'=>'行政部','code'=>'ADMIN'],
                ['name'=>'财务部','code'=>'FIN'],
                ['name'=>'业务部','code'=>'BUSINESS'],
                ['name'=>'总裁办','code'=>'GM Office'],
            ]
        );
    }
}
