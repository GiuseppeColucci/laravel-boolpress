<?php

use App\UserDetail;
use App\Author;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class AuthorSeeder extends Seeder
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
        //qui stimao popolando in maniera randomica i di 2 MODEL che sono: atuthor e userDetail

        $author = new Author();
        $author->name='john';
        $author->surname='richmond';
        $author->email='jon@richmond.com';
        $author->save();

        $userDetail= new UserDetail();
        $userDetail->bio ='lorem ipsum';
        $userDetail->website ='http://example.com';
        $userDetail->pic =$faker->pictureUrl(250, 250);

        $author->detail()->save($userDetail);//stiamo dicendo. vai nel author prendi il suo dato e salvalo in userdetail



    }
}
