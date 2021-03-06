<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(RolesTableSeeder::class);
        //$this->call(PostsTableSeeder::class);
        //$this->call(CategoryTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
    }
}
