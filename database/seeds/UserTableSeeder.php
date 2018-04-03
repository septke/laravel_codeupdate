<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(['role_id'=>1, 'is_active'=>1, 'name' => 'Tom Vanhoutte', 'email'=>'tom@test.be', 'password'=>bcrypt(123456), 'created_at'=>'2018-03-28 00:00:00', 'updated_at'=>'2018-03-28 00:00:00', 'photo_id'=>1]);
        DB::table('users')->insert(['role_id'=>1, 'is_active'=>1, 'name' => 'Tim Vanhoutte', 'email'=>'tim@test.be', 'password'=>bcrypt(123456), 'created_at'=>'2018-03-28 00:00:00', 'updated_at'=>'2018-03-28 00:00:00', 'photo_id'=>2]);
    }



}
