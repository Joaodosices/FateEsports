<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Admin;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Admin::create( [
            'id'=>1,
            'img'=>'https://i.imgur.com/LX4NaXx.png',
            'description'=>'',
            'facebook'=>'https://www.facebook.com/',
            'instagram'=>'https://www.instagram.com/',
            'twitter'=>'https://www.twitter.com/',
            'id_user'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Admin::create( [
            'id'=>2,
            'img'=>'https://i.imgur.com/2q98lIZ.png',
            'description'=>'',
            'facebook'=>'https://www.facebook.com/',
            'instagram'=>'https://www.instagram.com/',
            'twitter'=>'https://www.twitter.com/',
            'id_user'=>2,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Admin::create( [
            'id'=>3,
            'img'=>'https://i.imgur.com/vBAeEmE.png',
            'description'=>'',
            'facebook'=>'https://www.facebook.com/',
            'instagram'=>'https://www.instagram.com/',
            'twitter'=>'https://www.twitter.com/',
            'id_user'=>3,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Admin::create( [
            'id'=>4,
            'img'=>'https://i.imgur.com/jCOQ5aE.png',
            'description'=>'',
            'facebook'=>'https://www.facebook.com/',
            'instagram'=>'https://www.instagram.com/',
            'twitter'=>'https://www.twitter.com/',
            'id_user'=>4,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Admin::create( [
            'id'=>5,
            'img'=>'https://i.imgur.com/8VZwRHy.png',
            'description'=>'',
            'facebook'=>'https://www.facebook.com/',
            'instagram'=>'https://www.instagram.com/',
            'twitter'=>'https://www.twitter.com/',
            'id_user'=>5,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
    }
}
