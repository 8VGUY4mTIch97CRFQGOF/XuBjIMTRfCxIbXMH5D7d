<main class="content">
    <div class="hero">
        <div class="header">
            @include('menu.top')
            <div class="main-h1-block">
                <h1 class="heading">Note link ready</h1>
            </div>
        </div>
        <div class="note-input">
            <div class="main-input">

                @if(Session::get('timer', '') == 'yes')
                    <div class="warning-block">The note will self-destruct in <span id="countdown" data-destroy="{{Session::get('destroy', '')}}" data-minute="minute" data-second="second"></span></div>
                @else
                    <div class="warning-block">The note will self-destruct after reading</div>
                @endif

                <div class="info-block tooltip-container"><b id="link">{{url('/')}}/{{Session::get('note_url', '')}}</b><span class="tooltip">Copied to clipboard</span></div>
                <div class="button-group">
                    <div class="secondary-button w-button" id="copyNote">Copy link</div>
                    <a href="mailto:?body={{url('/')}}/{{Session::get('note_url', '')}}" class="secondary-button w-button">Email link</a>
                    @if(Session::get('timer', '') == 'yes')
                        <form action="{{route('destroy')}}" method="post" class="right">
                            {{csrf_field()}}
                            <input type="hidden" name="d" value="{{md5(Session::get('note_id', ''))}}">
                            <input type="hidden" name="url" value="{{Session::get('note_url', '')}}">
                            <button class="primary-button w-button right">Destroy now</button>
                        </form>
                    @else
                        <a href="{{url('/')}}/{{Session::get('note_url', '')}}" class="primary-button w-button right">Destroy now</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>