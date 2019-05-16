<main class="content">
    <div class="hero">
        <div class="header">
            @include('menu.top')
            <div class="main-h1-block">
                <h1 class="heading">Read and destroy?</h1>
            </div>
        </div>
        <div class="note-input">
            <div class="main-input">
                <div class="info-block">You're about to read and destroy the note with id <b>{{$url}}</b>@if($password)

                    You will be asked for the password to read the note.
                    If you don't have it, ask the person who sent you the note for it, before proceeding.@endif</div>
                <div class="button-group">
                    <form action="{{route('confirm')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{request()->route('id')}}">
                        <input type="submit" class="primary-button w-button" value="Yes, show me the note">
                        <a href="{{route('main')}}" class="secondary-button w-button">Not now</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>