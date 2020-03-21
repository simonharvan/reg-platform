<?php

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

        DB::table('events')->truncate();
        
        $event = Event::create([
                'id' => '1',
                'name' => 'Innovative Internet for Research and Higher Education',
                'available_until' => '2014-10-01 00:00:00',
                'email_cc' => 'conference.almaty@bero.tech',
                'email_reply_to' => 'reg-platform@bero.tech',
            ]);
        $event->languages()->sync([1,8]);

        $event = Event::create([
                'id' => '2',
                'name' => '16th EU – NGO Forum on Human Rights',
                'available_until' => '2014-12-04 00:00:00',
                'email_cc' => '16.eidhrforum@bero.tech',
                'email_reply_to' => '16.eidhrforum@bero.tech',
            ]);
        $event->languages()->sync([1,3,6]);

        $event = Event::create([
                'id' => '3',
                'name' => 'Regional Seminar Civil Society (Pilot Phase Activity)',
                'available_until' => '2014-12-11 00:00:00',
                'email_cc' => 'andreas.divanis@bero.tech',
                'email_reply_to' => 'andreas.divanis@bero.tech',
            ]);
        $event->languages()->sync([1]);

	}

}
