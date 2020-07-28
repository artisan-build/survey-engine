<div>
    <x-button wire:click="answer('{{ $question['key'] }}', 'Never')">{{ App\Support\SurveyResponses::NEVER }}</x-button>
    <x-button wire:click="answer('{{ $question['key'] }}', 'SOMETIMES')">{{ App\Support\SurveyResponses::SOMETIMES }}</x-button>
    <x-button wire:click="answer('{{ $question['key'] }}', 'OFTEN')">{{ App\Support\SurveyResponses::OFTEN }}</x-button>
    <x-button wire:click="answer('{{ $question['key'] }}', 'ALWAYS')">{{ App\Support\SurveyResponses::ALWAYS }}</x-button>
    <!-- v::never_to_always -->
</div>
