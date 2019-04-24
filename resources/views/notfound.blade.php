@extends('layouts.main')

@section('content')

    <main class="content">
        <div class="hero">
            <div class="header">
                @include('menu.top')
                <div class="main-h1-block">
                    <h1 class="heading">Note not found</h1>
                </div>
            </div>
            <div class="note-input">
                <div class="main-input">
                    <div class="warning-block">The note with id {{$note_id}} was not found.</div>
                </div>
            </div>
        </div>
    </main>

@endsection