<?php

namespace Tests\Unit;

use App\Survey;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LivewireAdministerSurveyTest extends TestCase
{
    use RefreshDatabase;

    private $survey;
    private array $snapshots;

    public function setUp(): void
    {
        parent::setUp();
        $this->survey = factory(Survey::class)->create();

        $this->snapshots = [
            'rules' => [
                "required|max:255",
                "required",
                "required|date",
                "required|numeric|max:1000|min:1",
                "required|numeric|max:1000|min:1",
            ],
            'responses' => [
                "Q1" => null,
                "Q2" => null,
                "Q3" => null,
                "Q4" => null,
                "Q5" => null,
                "Q6" => null,
                "Q7" => null,
                "Q8" => null
            ],
        ];
    }

    /** @test */
    public function it_calculates_model_attributes_correctly()
    {
        $this->assertSame($this->snapshots['rules'], $this->survey->rules);
        $this->assertSame($this->snapshots['responses'], $this->survey->responses);
    }

    /** @test */
    public function it_displays_each_question_and_response_set_correctly()
    {

    }
}
