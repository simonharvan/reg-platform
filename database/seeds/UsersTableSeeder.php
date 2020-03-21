<?php 
class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

        DB::table('users')->truncate();
        
        $now = date("Y-m-d H:i:s");

        $users = [
            [
                'username' => 'admin',
                'email' => 'simon@bero.tech',
                'password' => Hash::make('admin'),
                'created_at' => $now,
                'updated_at' => $now
            ]
        ];

        DB::table('users')->insert($users);

	}

}
