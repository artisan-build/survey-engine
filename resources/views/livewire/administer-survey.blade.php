<div>
    @isset($question['question'])
    {{ $question['question'] }}
    @endisset
    {{ $content }}
    @error('toValidate'){{ $message }}@enderror
</div>
