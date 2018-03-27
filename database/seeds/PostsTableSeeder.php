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
        DB::table('posts')->insert(['title' => 'post 1', 'body' => 'body 1']);
        DB::table('posts')->insert(['title' => 'post 2', 'body' => 'body 2']);
        DB::table('posts')->insert(['title' => 'post 3', 'body' => 'body 3']);
    }
}
