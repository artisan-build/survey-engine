<div>
    <x-button wire:click="answer('{{ $question['key'] }}', 'YES')">{{ App\Support\SurveyResponses::YES }}</x-button>
    <x-button wire:click="answer('{{ $question['key'] }}', 'NO')">{{ App\Support\SurveyResponses::NO }}</x-button>
    <!-- v::yes_no -->
</div>
