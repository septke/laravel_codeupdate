<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('photos')->insert(['file'=>'1522249015Schermafbeelding 2018-03-12 om 17.16.44.png', 'created_at'=>'2018-03-28 14:56:56', 'updated_at'=>'2018-03-28 14:56:56']);
        DB::table('photos')->insert(['file'=>'1522249027Schermafbeelding 2018-03-12 om 17.22.42.png', 'created_at'=>'2018-03-28 14:56:56', 'updated_at'=>'2018-03-28 14:56:56']);
        DB::table('photos')->insert(['file'=>'1522249080Schermafbeelding 2018-03-12 om 17.22.43.png', 'created_at'=>'2018-03-28 14:56:56', 'updated_at'=>'2018-03-28 14:56:56']);
        DB::table('photos')->insert(['file'=>'1522249112Schermafbeelding 2018-03-03 om 15.05.58.png', 'created_at'=>'2018-03-28 14:56:56', 'updated_at'=>'2018-03-28 14:56:56']);
        DB::table('photos')->insert(['file'=>'1522249217Schermafbeelding 2018-03-03 om 15.05.58.png', 'created_at'=>'2018-03-28 14:56:56', 'updated_at'=>'2018-03-28 14:56:56']);
        DB::table('photos')->insert(['file'=>'1522249015Schermafbeelding 2018-03-12 om 17.16.44.png', 'created_at'=>'2018-03-28 14:56:56', 'updated_at'=>'2018-03-28 14:56:56']);
        DB::table('photos')->insert(['file'=>'1522249237Schermafbeelding 2018-03-12 om 17.22.43.png', 'created_at'=>'2018-03-28 14:56:56', 'updated_at'=>'2018-03-28 14:56:56']);


}
}
