<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Tag;

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

        $tags_length = count(Tag::all());



        for($i = 0; $i < 30; $i++){
            $newPost = new Post();
            $newPost->title = $faker->text();
            $newPost->content = $paragraphs_string;
            $newPost->topic_id = $faker->numberBetween(1,6);
            $newPost->user_id = $faker->numberBetween(1, 30);
            $newPost->save();
            $newPost->tag()->sync(
                [
                    $faker->numberBetween(1, $tags_length),
                    $faker->numberBetween(1, $tags_length),
                    $faker->numberBetween(1, $tags_length)
                ]
            );
        }
    }
}
