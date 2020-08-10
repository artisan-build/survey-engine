@extends('layouts.app', ['layout' => 'vanilla'])

@section('content')
    <div><livewire:administer-survey :survey="$survey"/></div>
@endsection
