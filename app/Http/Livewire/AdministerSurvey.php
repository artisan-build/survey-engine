<?php

namespace App\Http\Livewire;

use App\Receipt;
use App\Response;
use App\Survey;
use Livewire\Component;

class AdministerSurvey extends Component
{
    // Respondent data
    public $name;
    public $email;
    public $respondentIdentificationOptIn = false;

    // Survey data
    public $surveyId;
    public $title;
    public $questions;
    public $responses;
    public $rules;
    public $anonymous;
    public $content;
    public $response;
    public $showAnonymous = false;

    public $view;

    // Current user prompt
    public $question = [];

    public function mount(Survey $survey)
    {
        $this->questions = $survey->questions;
        $this->responses = $survey->responses;
        $this->rules = $survey->rules;
        $this->anonymous = $survey->anonymous;
        $this->surveyId = $survey->id;
        $this->title = $survey->title;
        if ($this->anonymous) {
            $this->name = 'Anonymous';
        }

        // DELETE BELOW
        if (config('app.env') !== 'testing') {
            $this->email = 'ed@gros.co';
            for ($i = 0; $i < 9; $i++) {
                array_shift($this->questions);
            }
        }

        // DELETE ABOVE
        $this->nextQuestion();
    }

    public function save()
    {
        // We do not even prompt to ask permission to save respondent data with the survey results if the survey is
        // anonymous and we only store it if the user gives consent.
        if (! $this->anonymous && $this->respondentIdentificationOptIn) {
            $this->responses['respondent'] = ['name' => $this->name, 'email' => $this->email];
        }

        // Save survey responses
        Response::create([
            'survey_id' => $this->surveyId,
            'responses' => $this->responses,
        ]);

        // Create receipt using hash of email
        Receipt::create([
            'survey_id' => $this->surveyId,
            'respondent' => md5($this->email),
        ]);

        // Post to Contest Kit if applicable.
    }

    public function answer($q, $a)
    {
        if ($q === 'email') {
            if (! $this->validate(['email' => 'email|required'])) {
                return;
            }
            if (Receipt::where('respondent', md5($this->email))->where('survey_id', $this->surveyId)->count() > 0) {
                $this->addError('email', 'You have already completed this survey.');

                return;
            }
        }

        if ($a === '___RESPONSE___') {
            $a = $this->response;
        }

        if ($this->question['rules'] ?? '') {
            $this->response = $a;
            if (! $this->validate(['response' => $this->question['rules']])) {
                return;
            }
        }

        $this->responses[$q] = $a;
        $this->response = '';
        $this->nextQuestion();
    }

    public function nextQuestion()
    {
        if (! $this->name || ! $this->email) {
            $this->view = 'name_email';

            return;
        }

        if (empty($this->questions)) {
            $this->save();
            $this->question['question'] = '';
            $this->question['key'] = '';
            $this->view = 'thank_you';

            return;
        }

        $this->question = array_shift($this->questions);
        $this->view = $this->question['response_set'] ?? '';
    }

    public function render()
    {
        return view('livewire.administer-survey');
    }
}
