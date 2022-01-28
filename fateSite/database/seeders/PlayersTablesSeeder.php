<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Player; 

class PlayersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create( [
            'id'=>1,
            'nickname'=>'Dinis "Voladormir" Silva',
            'img'=>'https://i.imgur.com/CDVqIQj.png',
            'id_game'=>8,
            'id_user'=>10,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Player::create( [
            'id'=>2,
            'nickname'=>'Antonio "AnT" Carvalho',
            'img'=>'https://i.imgur.com/CDVqIQj.pn',
            'id_game'=>8,
            'id_user'=>9,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Player::create( [
            'id'=>3,
            'nickname'=>'Felipe "FELP" Jesus+',
            'img'=>'https://i.imgur.com/CDVqIQj.pn',
            'id_game'=>8,
            'id_user'=>8,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Player::create( [
            'id'=>4,
            'nickname'=>'Francisco "Franc" Antony',
            'img'=>'https://i.imgur.com/CDVqIQj.pn',
            'id_game'=>8,
            'id_user'=>7,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Player::create( [
            'id'=>5,
            'nickname'=>'Ricardo "FOX" Pacheco',
            'img'=>'https://i.imgur.com/CDVqIQj.png',
            'id_game'=>8,
            'id_user'=>11,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );

            Player::create( [
                'id'=>6,
                'nickname'=>'João "ICE-iwnl-" Fonseca',
                'img'=>'https://i.imgur.com/CDVqIQj.pn',
                'id_game'=>2,
                'id_user'=>2,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );

                            
            Player::create( [
                'id'=>7,
                'nickname'=>'Maria "Mary" Rodrigues',
                'img'=>'https://i.imgur.com/CDVqIQj.png',
                'id_game'=>2,
                'id_user'=>12,
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
    }
}
