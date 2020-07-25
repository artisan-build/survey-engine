<?php

namespace App\Http\Livewire;

use App\Survey;
use Livewire\Component;

class AdministerSurvey extends Component
{
    // Respondent data
    public $name;
    public $email;
    public $respondentIdentificationOptIn = false;

    // Survey data
    public $questions;
    public $responses;
    public $rules;
    public $anonymous;

    // Current user prompt
    public $question = [];


    public function mount(Survey $survey)
    {
        $this->questions = $survey->questions;
        $this->responses = $survey->responses;
        $this->rules = $survey->rules;
        $this->anonymous = $survey->anonymous;
    }

    public function save()
    {
        // We do not even prompt to ask permission to save respondent data with the survey results if the survey is
        // anonymous and we only store it if the user gives consent.
        if (!$this->anonymous && $this->respondentIdentificationOptIn) {
            $this->responses['respondent'] = ['name' => $this->name, 'email' => $this->email];
        }

        // Save survey responses

        // Create receipt using hash of email

        // Post to Contest Kit if applicable.
    }

    public function render()
    {
        return view('livewire.administer-survey');
    }
}
