<?php

namespace Tests\Unit;

use App\Http\Livewire\AdministerSurvey;
use App\Response;
use App\Survey;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireAdministerSurveyTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    private Survey $survey;
    private array $snapshots;
    private array $respondent;
    private array $answers = [];

    public function setUp(): void
    {
        parent::setUp();
        $this->survey = factory(Survey::class)->create();

        $this->respondent = ['name' => $this->faker->name, 'email' => $this->faker->email];

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
                "Q8" => null,
                "Q9" => null,
            ],
            'answers' => [
                'COMPLETELY_FALSE',
                'STRONGLY_AGREE',
                'YES',
                'OFTEN',
                $this->faker->sentence,
                $this->faker->paragraphs(3, true),
                Carbon::now()->format('m/d/Y'),
                $this->faker->numberBetween(1,100),
                $this->faker->randomFloat(2 ,0, 100)
            ],
        ];

        foreach (array_keys($this->snapshots['responses']) as $k => $v) {
            $this->answers[$v] = $this->snapshots['answers'][$k];
        }
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
        Livewire::test(AdministerSurvey::class, ['survey' => $this->survey])
            ->assertSee('v::name_email')
            ->set('name', $this->respondent['name'])
            ->set('email', $this->respondent['email'])
            ->call('nextQuestion')
            ->assertSee('v::completely_false_to_completely_true')
            ->assertSee($this->survey->questions[0]['question'])
            ->call('answer', $this->survey->questions[0]['key'], array_shift($this->snapshots['answers']))
            ->assertSee($this->survey->questions[1]['question'])
            ->assertSee('v::strongly_disagree_to_strongly_agree')
            ->call('answer', $this->survey->questions[1]['key'], array_shift($this->snapshots['answers']))
            ->assertSee('v::yes_no')
            ->assertSee($this->survey->questions[2]['question'])
            ->call('answer', $this->survey->questions[2]['key'], array_shift($this->snapshots['answers']))
            ->assertSee('v::never_to_always')
            ->assertSee($this->survey->questions[3]['question'])
            ->call('answer', $this->survey->questions[3]['key'], array_shift($this->snapshots['answers']))
            ->assertSee($this->survey->questions[4]['question'])
            ->assertSee('v::string')
            ->call('answer', $this->survey->questions[4]['key'], array_shift($this->snapshots['answers']))
            ->assertSee($this->survey->questions[5]['question'])
            ->assertSee('v::text')
            ->call('answer', $this->survey->questions[5]['key'], array_shift($this->snapshots['answers']))
            ->assertSee($this->survey->questions[6]['question'])
            ->assertSee('v::date')
            ->call('answer', $this->survey->questions[6]['key'], $this->faker->sentence)
            ->assertHasErrors('response', 'date')
            ->call('answer', $this->survey->questions[6]['key'], array_shift($this->snapshots['answers']))
            ->assertSee($this->survey->questions[7]['question'])
            ->assertSee('v::number')
            ->call('answer', $this->survey->questions[7]['key'], $this->faker->sentence)
            ->assertHasErrors('response', 'number')
            ->call('answer', $this->survey->questions[7]['key'], array_shift($this->snapshots['answers']))
            ->assertSee($this->survey->questions[8]['question'])
            ->assertSee('v::currency')
            ->call('answer', $this->survey->questions[8]['key'], array_shift($this->snapshots['answers']))
            ->assertSee('v::thank_you');

        $this->assertDatabaseHas('receipts', ['respondent' => md5($this->respondent['email'])]);
        $this->assertEqualsCanonicalizing(Response::first()->responses, $this->answers);

    }
}
