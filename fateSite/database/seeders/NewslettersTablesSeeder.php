<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Newsletter; 

class NewslettersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Newsletter::create( [
            'id'=>1,
            'email'=>'alexandre.maia1@sapo.pt',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Newsletter::create( [
            'id'=>2,
            'email'=>'joaofrancofonseca@gmail.com',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Newsletter::create( [
            'id'=>3,
            'email'=>'diogogoncalves@sapo.pt',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Newsletter::create( [
            'id'=>4,
            'email'=>'luiscarvalho400@gmail.com',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            Newsletter::create( [
            'id'=>5,
            'email'=>'luismclaudino@gmail.com',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
    }
}
