<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Partner; 

class PartnersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::create( [
            'id'=>1,
            'name'=>'Lays',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'linkpartner'=>'https://lays.pt/',
            'img'=>'https://i.imgur.com/86J7QBr.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Partner::create( [
            'id'=>2,
            'name'=>'RedBull',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'linkpartner'=>'https://www.redbull.com/pt-pt/',
            'img'=>'https://i.imgur.com/CUdC7Ug.png\r\n',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Partner::create( [
            'id'=>3,
            'name'=>'Razer',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n',
            'linkpartner'=>'https://www.razer.com/',
            'img'=>'https://i.imgur.com/4e851os.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Partner::create( [
            'id'=>4,
            'name'=>'PayPal',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\n',
            'linkpartner'=>'https://www.paypal.com/pt/home',
            'img'=>'https://i.imgur.com/1jGqTpS.png',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
    }
}
