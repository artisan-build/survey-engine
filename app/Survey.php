<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $casts = [
        'questions' => 'array',
    ];

    protected $attributes = [
        'questions' => '[]',
    ];

    public function getResponsesAttribute()
    {
        $responses = [];
        foreach ($this->questions as $question) {
            $responses[$question['key']] = null;
        }

        return $responses;
    }

    public function getRulesAttribute()
    {
        $rules = [];
        foreach ($this->questions as $question) {
            if (! is_null($question['rules'])) {
                $rules[] = $question['rules'];
            }
        }

        return $rules;
    }
}
