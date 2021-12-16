<?php

namespace Database\Seeders;

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
        $this->call(UserTablesSeeder::class);
        $this->call(AdminTablesSeeder::class);
        $this->call(ContactsTablesSeeder::class);
        $this->call(GamesTablesSeeder::class);
        $this->call(ImagesgamesTablesSeeder::class);
        $this->call(NewslettersTablesSeeder::class);
        $this->call(PartnersTablesSeeder::class);
        $this->call(PlayersTablesSeeder::class);
        $this->call(TrophiesTablesSeeder::class);
    }
}
