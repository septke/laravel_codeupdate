<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       // DB::table('posts')->insert(['title' => 'post 1', 'body' => 'body 1']);
        //DB::table('posts')->insert(['title' => 'post 2', 'body' => 'body 2']);
        //DB::table('posts')->insert(['title' => 'post 3', 'body' => 'body 3']);
        DB::table('posts')->insert(['user_id'=>1, 'category_id'=>1, 'photo_id'=>3, 'title' => 'post 1', 'body'=>'lorem ipsum post 1','created_at'=>'2018-03-28 14:59:46', 'updated_at'=>'2018-03-28 14:59:46']);
        DB::table('posts')->insert(['user_id'=>1, 'category_id'=>1, 'photo_id'=>4,'title' => 'post 2', 'body'=>'lorem ipsum post 2','created_at'=>'2018-03-28 14:59:46', 'updated_at'=>'2018-03-28 14:59:46']);
        DB::table('posts')->insert(['user_id'=>2, 'category_id'=>1, 'photo_id'=>5,'title' => 'post 3', 'body'=>'lorem ipsum post 3','created_at'=>'2018-03-28 14:59:46', 'updated_at'=>'2018-03-28 14:59:46']);
        DB::table('posts')->insert(['user_id'=>2, 'category_id'=>1, 'photo_id'=>6,'title' => 'post 3', 'body'=>'lorem ipsum post 3','created_at'=>'2018-03-28 14:59:46', 'updated_at'=>'2018-03-28 14:59:46']);
        DB::table('posts')->insert(['user_id'=>2, 'category_id'=>1, 'photo_id'=>7,'title' => 'post 3', 'body'=>'lorem ipsum post 3','created_at'=>'2018-03-28 14:59:46', 'updated_at'=>'2018-03-28 14:59:46']);
    }
}


