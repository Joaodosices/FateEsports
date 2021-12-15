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
            'email'=>'francisco@gmail.com',
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
    }
}
