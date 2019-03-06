<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public $faker;

    public function __construct()
    {
        $this->faker = \Faker\Factory::create();
    }

    public function run()
    {
        \App\Platform::truncate();
        \App\Question::truncate();
        \App\Option::truncate();



        $platforms = array(
            ['name' => 'Web', 'cost' => '20000'],
            ['name' => 'Android', 'cost' => '24500'],
            ['name' => 'IOS', 'cost' => '25000'],
        );

        foreach ($platforms as $platform) {
            $platform = \App\Platform::create([
                'name' => $platform['name'],
                'base_development_cost' => $platform['cost']
            ]);
            $this->seedQuestions($platform);
        }
    }

    public function seedQuestions($platform)
    {
        $questions = [];

        foreach (range(1, 7) as $item) {
            $q = ['question' => "question $item {$platform->name}", 'platform_id' => $platform->id];
            array_push($questions, $q);
        }

        foreach ($questions as $question) {
            $question  = \App\Question::create([
                'question' => $question['question'],
                'platform_id' => $question['platform_id']
            ]);

            $this->seedOptions($question, $platform);
        }
    }

    public function seedOptions($question, $platform)
    {
        $options = [];
        foreach (range(1, 3) as $item) {
            $q = ['option' => "option  $item $platform->name $question->id", 'cost' => $this->faker->numberBetween(8000,17000)];
            array_push($options, $q);
        }

        foreach ($options as $option) {
            \App\Option::create([
                'option' => $option['option'],
                'cost' => $option['cost']
            ]);
        }
    }
}
