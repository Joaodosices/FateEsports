<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Users;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Joao',
            'surname' => 'Fonseca',
            'email' => 'joaofrancofonseca@gmail.com',
            'password' => Hash::make('admin')
        ])
    }
}
