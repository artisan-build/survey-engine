<div class="grid grid-cols-1 lg:grid-cols-4 gap-4 w-full">
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', 'Never')">{{ App\Support\SurveyResponses::NEVER }}</x-button>
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', 'SOMETIMES')">{{ App\Support\SurveyResponses::SOMETIMES }}</x-button>
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', 'OFTEN')">{{ App\Support\SurveyResponses::OFTEN }}</x-button>
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', 'ALWAYS')">{{ App\Support\SurveyResponses::ALWAYS }}</x-button>
    <!-- v::never_to_always -->
</div>
