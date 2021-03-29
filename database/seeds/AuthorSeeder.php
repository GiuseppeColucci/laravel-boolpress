<?php

use App\UserDetail;
use Illuminate\Database\Seeder;
use Faker\generator as Faker;
class Author extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //stiamo creando immagini random
        $faker->addProvider(new WW\Faker\Provider\Picture($faker));
        //qui stimao popolando in maniera randomica i di 2 MODEL

        $author = new Author();
        $author->name='john';
        $author->surname='richmond';
        $author->email='jon@richmond.com';
        $author->save();

        $userDetail= new UserDetail();
        $userDetail->bio ='lorem ipsum';
        $userDetail->websit ='http://example.com';
        $userDetail->pic =$faker->pictureUrl(250, 250);

        $author->detail->save($userDetail);//stiamo dicendo. vai nel author prendi il suo dato e salvalo in userdetail



    }
}
