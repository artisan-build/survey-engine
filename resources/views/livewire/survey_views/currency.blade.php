<div class="grid grid-cols-1 lg:grid-cols-6 gap-4 w-full">
    <div class="lg:col-span-5">
        <label for="response" class="sr-only">Response</label>
        <div class="rounded-md lg:pr-6">
            <input wire:model="response" type="tel" id="response" class="form-input block w-full sm:text-sm sm:leading-8" placeholder="{{ $question['placeholder'] ?? '' }}">
        </div>
        @error('response')
        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
        @enderror
    </div>

    <x-button size="xl" color="green" classes="w-full" wire:click="answer('{{ $question['key'] }}', '___RESPONSE___')">{!! SurveyResponses::NEXT !!}</x-button>

    <!-- v::currency -->
</div>
