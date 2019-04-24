@extends('layouts.main')

@section('content')

    @if($ask_for_confirm && !isset($confirmed))
        @include('confirm')
    @else
        @if($password)
            @include('password')
        @else
            @include('text')
        @endif
    @endif


@endsection


