<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrizeTableSeeder extends Seeder {
    public function run()
    {
        DB::table('prizes')->insert(
            array(
                'date' => '2014-01-01',
                'prize' => '123456',
                'type' => 'first',
            )
        );
    }

}