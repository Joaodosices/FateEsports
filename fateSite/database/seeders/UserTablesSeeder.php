<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User; 

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create( [
            'id'=>1,
            'name'=>'Alexandre',
            'surname'=>'Maia',
            'email'=>'alexandre.maia1@sapo.pt',
            'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
            'created_at'=>'2021-12-14 19:24:18',
            'updated_at'=>'2021-12-14 19:24:18'
            ] );
            
            
                        
            User::create( [
            'id'=>2,
            'name'=>'João',
            'surname'=>'Fonseca',
            'email'=>'joaofrancofonseca@gmail.com',
            'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            User::create( [
            'id'=>3,
            'name'=>'Diogo',
            'surname'=>'Gonçalves',
            'email'=>'diogogoncalves8@sapo.pt',
            'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            User::create( [
            'id'=>4,
            'name'=>'Luís',
            'surname'=>'Claudino',
            'email'=>'luismclaudino@gmail.com',
            'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            User::create( [
            'id'=>5,
            'name'=>'Luís',
            'surname'=>'Carvalho',
            'email'=>'luiscarvalho400@gmail.com',
            'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            User::create( [
            'id'=>6,
            'name'=>'admin',
            'surname'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            User::create( [
            'id'=>7,
            'name'=>'Francisco',
            'surname'=>'antony',
            'email'=>'francisco.antony@gmail.com',
            'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            User::create( [
            'id'=>8,
            'name'=>'Felipe',
            'surname'=>'Jesus',
            'email'=>'felipe@gmail.com',
            'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            User::create( [
            'id'=>9,
            'name'=>'Antonio',
            'surname'=>'Carvalho',
            'email'=>'antonio@gmail.com',
            'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            User::create( [
            'id'=>10,
            'name'=>'Dinis',
            'surname'=>'Silva',
            'email'=>'dinis@gmail.com',
            'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
            
                        
            User::create( [
            'id'=>11,
            'name'=>'Ricardo',
            'surname'=>'Pacheco',
            'email'=>'ricardo@gmail.com',
            'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );

            User::create( [
                'id'=>12,
                'name'=>'Maria',
                'surname'=>'Rodrigues',
                'email'=>'mary@gmail.com',
                'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );

            User::create( [
                'id'=>13,
                'name'=>'Phillip',
                'surname'=>'Dosen',
                'email'=>'phillip@gmail.com',
                'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );

            User::create( [
                'id'=>14,
                'name'=>'Tyson',
                'surname'=>'Ngo',
                'email'=>'tyson@gmail.com',
                'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
            User::create( [
                'id'=>15,
                'name'=>'Hunter',
                'surname'=>'Mims',
                'email'=>'junter@gmail.com',
                'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
            User::create( [
                'id'=>16,
                'name'=>'Jared',
                'surname'=>'Gitlin',
                'email'=>'jared@gmail.com',
                'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
            User::create( [
                'id'=>17,
                'name'=>'Michael',
                'surname'=>'Gulino',
                'email'=>'michael@gmail.com',
                'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );
            User::create( [
                'id'=>18,
                'name'=>'Shahzeb',
                'surname'=>'Khan',
                'email'=>'shahzeb@gmail.com',
                'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                'created_at'=>NULL,
                'updated_at'=>NULL
                ] );

                User::create( [
                    'id'=>19,
                    'name'=>'Manuel',
                    'surname'=>'Sousa',
                    'email'=>'manuel@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );
                
                User::create( [
                    'id'=>20,
                    'name'=>'Carl',
                    'surname'=>'Gyldenkærne',
                    'email'=>'carl@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );       

                User::create( [
                    'id'=>21,
                    'name'=>'Tiago',
                    'surname'=>'Mendes',
                    'email'=>'tiago@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );   

                User::create( [
                    'id'=>22,
                    'name'=>'Paulo',
                    'surname'=>'Rebocho',
                    'email'=>'paulo@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );
                    
                User::create( [
                    'id'=>23,
                    'name'=>'Dragomir',
                    'surname'=>'Antonio-Cosmin',
                    'email'=>'dragomir@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );
                    
                User::create( [
                    'id'=>24,
                    'name'=>'Ricardo',
                    'surname'=>'Mendonsa',
                    'email'=>'ricardo.mendonsa@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );

                User::create( [
                    'id'=>25,
                    'name'=>'Joaquim',
                    'surname'=>'Mendonsa',
                    'email'=>'joaquim@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );
                    
                User::create( [
                    'id'=>26,
                    'name'=>'João',
                    'surname'=>'Carlos',
                    'email'=>'joao.carlos@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );
                    
                User::create( [
                    'id'=>27,
                    'name'=>'Francisco',
                    'surname'=>'Gonçalves',
                    'email'=>'francisco@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );
                
                User::create( [
                    'id'=>28,
                    'name'=>'Antonia',
                    'surname'=>'Conceição',
                    'email'=>'antonia@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );
            
                User::create( [
                    'id'=>29,
                    'name'=>'Joana',
                    'surname'=>'Pimenta',
                    'email'=>'joana@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] ); 
                    
                User::create( [
                    'id'=>30,
                    'name'=>'Chris',
                    'surname'=>'Abroad',
                    'email'=>'chris@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );
                    
                User::create( [
                    'id'=>31,
                    'name'=>'Tiago',
                    'surname'=>'Saramago',
                    'email'=>'tiago.saramago@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );

                User::create( [
                    'id'=>32,
                    'name'=>'Claudia',
                    'surname'=>'Mushrooms',
                    'email'=>'claudia@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );

                User::create( [
                    'id'=>33,
                    'name'=>'Ricardo',
                    'surname'=>'Fazeres',
                    'email'=>'ricardo.fazeres@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );

                User::create( [
                    'id'=>34,
                    'name'=>'Diogo',
                    'surname'=>'Bataguas',
                    'email'=>'diogo.bataguas@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );

                User::create( [
                    'id'=>35,
                    'name'=>'Hugo',
                    'surname'=>'Bomboca',
                    'email'=>'hugo.bomboca@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );

                User::create( [
                    'id'=>36,
                    'name'=>'Cristiano',
                    'surname'=>'Ronaldo',
                    'email'=>'cristiano.ronaldo@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );

                User::create( [
                    'id'=>37,
                    'name'=>'Lionel',
                    'surname'=>'Messi',
                    'email'=>'lionel.messi@gmail.com',
                    'password'=>'$2y$10$Sj2mjp8TUj7apZx6BZ9CQe8xeC0n/nd0UZfi.pUPausoPG4v8f4AS',
                    'created_at'=>NULL,
                    'updated_at'=>NULL
                    ] );


                    
        
    

    }
}
