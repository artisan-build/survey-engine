<div>
    @if ($anonymous)
    @include('livewire.survey_views.anonymous_alert')
    @endif
    <div  class="bg-gray-50 rounded-lg p-6 lg:p-12">
        @isset($question['question'])
            <h2 class="mt-6 text-xl lg:text-3xl leading-6 lg:leading-9 font-extrabold text-gray-900 mb-12">
                {{ $question['question'] }}
            </h2>
        @endisset
        @if ($view) @include('livewire.survey_views.'.$view) @endif
        @error('toValidate'){{ $message }}@enderror
    </div>



    @if ($anonymous && $showAnonymous)
            @include('livewire.survey_views.privacy_modal')
        @endif
</div>
