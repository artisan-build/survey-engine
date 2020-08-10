<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 w-full">
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', 'YES')">{{ App\Support\SurveyResponses::YES }}</x-button>
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', 'NO')">{{ App\Support\SurveyResponses::NO }}</x-button>
    <!-- v::yes_no -->
</div>
