<div class="grid grid-cols-1 gap-4 w-full">
    <div>
        <label for="response" class="sr-only">Response</label>
        <div class="rounded-md">
            <textarea wire:model="response" id="response" class="form-input block w-full sm:text-sm sm:leading-8" placeholder="{{ $question['placeholder'] ?? '' }}"></textarea>
        </div>
        @error('response')
        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
        @enderror
    </div>
    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', '___RESPONSE___')">{!! SurveyResponses::NEXT !!}</x-button>



    <!-- v::text -->
</div>
