<?php

use Illuminate\Database\Seeder;
use App\Topic;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topics = [
            "IT",
            "Science",
            "Cooking",
            "Books",
            "Math",
            "Security",
            "Sport"
        ];

        foreach ($topics as $topic) {
            $newTopic = new Topic();
            $newTopic->name = $topic;
            $newTopic->save();
        }
    }
}
