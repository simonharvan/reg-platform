<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the applications database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(EventsTextTableSeeder::class);
        $this->call(CodesTableSeeder::class);
        $this->call(CodeTextsTableSeeder::class);
    }
}
