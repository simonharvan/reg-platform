<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

        DB::table('codes')->truncate();
        
        $codes = [
            [
                'id' => '1',
                'event_id' => '1',
                'group_id' => '1',    
                'password' => 'qMDFafFF22',
            ],
            [
                'id' => '2',
                'event_id' => '1',
                'group_id' => '2',             
                'password' => 'AW1ldZcbEm',
            ],
            [
                'id' => '3',
                'event_id' => '1',
                'group_id' => '3',
                'password' => 'ER0EScrVzG',
            ],
            [
                'id' => '4',
                'event_id' => '2',
                'group_id' => '1',             
                'password' => 'Ul3Ogu8ZZmTP',
            ],
            [
                'id' => '5',
                'event_id' => '2',
                'group_id' => '2',             
                'password' => 'OaXXd1VPnFYe',
            ],
            [
                'id' => '6',
                'event_id' => '2',
                'group_id' => '3',             
                'password' => 'fEs1saswmVUI',
            ],
            [
                'id' => '7',
                'event_id' => '3',
                'group_id' => '1',             
                'password' => 'Vx1o6XmWDvBK',
            ],
            [
                'id' => '8',
                'event_id' => '3',
                'group_id' => '3',             
                'password' => '8L1hHe5sbu5R',
            ],
        ];

        DB::table('codes')->insert($codes);

	}

}
