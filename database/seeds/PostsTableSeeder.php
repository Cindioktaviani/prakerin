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
       $posts = [
       ['title'=>'Tips cepat nikah', 'content'=>'lorem ipsum'],
       ['title'=>'Haruskah menunda nikah?','content'=>'lorem ipsum'],
       ['title'=>'Membangun visi misi keluarga', 'content'=>'lorem ipsum']];
       DB::table('posts')->insert($posts);
    } 
}
