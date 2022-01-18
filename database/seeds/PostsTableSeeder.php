<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $paragraphs = $faker->paragraphs(5);
        $paragraphs_string = implode(",", $paragraphs);

        dump($paragraphs_string);

        for($i = 0; $i < 30; $i++){
            $newPost = new Post();
            $newPost->title = $faker->text();
            $newPost->content = $paragraphs_string;
            $newPost->creator_id = $faker->randomDigit(0);
            $newPost->topics = $faker->word();
            $newPost->save();
        }
    }
}
