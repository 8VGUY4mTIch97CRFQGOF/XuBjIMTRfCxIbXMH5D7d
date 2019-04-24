@extends('layouts.main')

@section('content')

    @if(Session::has('note_url'))
        @include('ready')
    @else
        @include('add')
    @endif

@endsection