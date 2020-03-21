<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

        DB::table('groups')->truncate();
        
        $groups = [
            [
                'id' => '1',
                'name' => 'non-sponsored',
            ],
            [
                'id' => '2',
                'name' => 'sponsored',
            ],
            [
                'id' => '3',
                'name' => 'staff',
            ]
        ];

        DB::table('groups')->insert($groups);

	}

}
