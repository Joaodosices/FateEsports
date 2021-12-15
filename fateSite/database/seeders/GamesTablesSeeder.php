<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Game; 

class GamesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create( [
            'id'=>1,
            'name'=>'Fifa',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Game::create( [
            'id'=>2,
            'name'=>'Apex Legends',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Game::create( [
            'id'=>3,
            'name'=>'League of Legends',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Game::create( [
            'id'=>4,
            'name'=>'Rainbow Six Siege',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Game::create( [
            'id'=>5,
            'name'=>'Fortnite',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Game::create( [
            'id'=>6,
            'name'=>'Rocket League',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Game::create( [
            'id'=>7,
            'name'=>'Valorant',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Game::create( [
            'id'=>8,
            'name'=>'Counter-Strike:Global Offensive',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
    }
}
