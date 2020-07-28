<div>
    <x-button wire:click="answer('{{ $question['key'] }}', 'STRONGLY_DISAGREE')">{{ App\Support\SurveyResponses::STRONGLY_DISAGREE }}</x-button>
    <x-button wire:click="answer('{{ $question['key'] }}', 'DISAGREE')">{{ App\Support\SurveyResponses::DISAGREE }}</x-button>
    <x-button wire:click="answer('{{ $question['key'] }}', 'AGREE')">{{ App\Support\SurveyResponses::AGREE }}</x-button>
    <x-button wire:click="answer('{{ $question['key'] }}', 'STRONGLY_AGREE')">{{ App\Support\SurveyResponses::STRONGLY_AGREE }}</x-button>
    <!-- v::strongly_disagree_to_strongly_agree -->
</div>
