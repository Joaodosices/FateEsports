<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Trophie; 

class TrophiesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trophie::create( [
            'id'=>1,
            'name'=>'Master League Portual',
            'date'=>'2020-01-05',
            'position'=>1,
            'linktournament'=>'https://mlp.pt/',
            'id_game'=>8,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Trophie::create( [
            'id'=>2,
            'name'=>'OMEN WGR Challenge 2020',
            'date'=>'2020-02-05',
            'position'=>2,
            'linktournament'=>'https://pt.egamersworld.com/counterstrike/event/omen-wgr-challenge-2020-VJxxJxhalF',
            'id_game'=>8,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Trophie::create( [
            'id'=>3,
            'name'=>'OMEN Retake Season 1',
            'date'=>'2021-08-12',
            'position'=>3,
            'linktournament'=>'https://pt.egamersworld.com/counterstrike/event/omen-retake-season-1-41Ki-40jK',
            'id_game'=>8,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
    }
}
