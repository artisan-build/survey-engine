<div class="grid grid-cols-1 lg:grid-cols-6 gap-4 w-full">
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', 'COMPLETELY_FALSE')">{{ App\Support\SurveyResponses::COMPLETELY_FALSE }}</x-button>
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', 'MOSTLY_FALSE')">{{ App\Support\SurveyResponses::MOSTLY_FALSE }}</x-button>
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', 'SOMEWHAT_FALSE')">{{ App\Support\SurveyResponses::SOMEWHAT_FALSE }}</x-button>
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', 'SOMEWHAT_TRUE')">{{ App\Support\SurveyResponses::SOMEWHAT_TRUE }}</x-button>
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', 'MOSTLY_TRUE')">{{ App\Support\SurveyResponses::MOSTLY_TRUE }}</x-button>
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', 'COMPLETELY_TRUE')">{{ App\Support\SurveyResponses::COMPLETELY_TRUE }}</x-button>
    <!-- v::completely_false_to_completely_true -->
</div>
