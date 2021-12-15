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
            'img'=>'https://i.imgur.com/f1g7gvbh.jpg',
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
            'img'=>'https://i.imgur.com/7DIwlN3h.jpg',
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
            'img'=>'https://i.imgur.com/hQMoftSh.jpg',
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
            'img'=>'https://i.imgur.com/GzbZnRRh.jpg',
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
            'img'=>'https://i.imgur.com/2uTidLmh.jpg',
            'description'=>'',
            'facebook'=>'https://www.facebook.com/',
            'instagram'=>'https://www.instagram.com/',
            'twitter'=>'https://www.twitter.com/',
            'id_user'=>5,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Admin::create( [
            'id'=>6,
            'img'=>'https://i.imgur.com/kf9j2EAh.jpg',
            'description'=>'',
            'facebook'=>'https://www.facebook.com/',
            'instagram'=>'https://www.instagram.com/',
            'twitter'=>'https://www.twitter.com/',
            'id_user'=>6,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
    }
}
