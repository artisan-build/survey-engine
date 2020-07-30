<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Survey;
use Faker\Generator as Faker;

$factory->define(Survey::class, function (Faker $faker) {
    $questions = [];
    $sets = [
        'completely_false_to_completely_true',
        'strongly_disagree_to_strongly_agree',
        'yes_no',
        'never_to_always',
        'string',
        'text',
        'date',
        'number',
        'currency',
    ];

    $i = 0;
    while ($rs = array_shift($sets)) {
        $i++;
        $rules = [
            'completely_false_to_completely_true' => null,
            'strongly_disagree_to_strongly_agree' => null,
            'yes_no' => null,
            'never_to_always' => null,
            'string' => 'required|max:255',
            'text' => 'required',
            'date' => 'required|date',
            'number' => 'required|numeric|max:1000|min:1',
            'currency' => 'required|numeric|max:1000|min:1',
        ];
        $questions[] = [
            'key' => 'Q'.$i,
            'question' => $faker->sentence,
            'response_set' => $rs,
            'rules' => $rules[$rs],
        ];
    }

    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraphs(3, true),
        'questions' => $questions,
    ];
});
