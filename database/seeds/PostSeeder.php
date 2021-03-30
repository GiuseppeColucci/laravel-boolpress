<?php

use App\UserDetail;
use App\Author;
use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //stiamo creando immagini random

        //qui stimao popolando in maniera randomica i di 2 MODEL che sono: atuthor e userDetail
        for($i =0 ; $i<50; $i++){

            $author = new Author();
            $author->name=$faker->firstName();
            $author->surname=$faker->lastName();
            $author->email=$faker->email();
            $author->save();

            $userDetail= new UserDetail();
            $userDetail->bio =$faker->text();
            $userDetail->website =$faker->url();
            $userDetail->pic ='https://picsum.photos/seed/'. rand(0, 1000).'/200/300';

            $post= new Post();
            $post->title=$faker->text(20);
            $post->body=$faker->text(1000);


            $author->detail()->save($userDetail);//stiamo dicendo. vai nel author prendi il suo dato e salvalo in userdetail
            $author->post()->save($post);
        }



    }
}
