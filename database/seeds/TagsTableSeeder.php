<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Faker\Generator as Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 30; $i++) {
            $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
            $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
            $newTag = new Tag();
            $newTag->name = $faker->word();
            //$newTag->color = str_pad( dechex( mt_rand( 0, 255 ) ), 6, '0', STR_PAD_LEFT);
            $newTag->color = $color;
            $newTag->save();
        }
    }
}
