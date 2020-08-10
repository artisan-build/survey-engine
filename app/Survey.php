<?php

namespace App;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use Uuid;

    protected $keyType = 'string';
    public $incrementing = false;

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
