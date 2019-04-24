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
                    <div class="warning-block">The note will self-destruct after reading it</div>
                @endif

                <div class="info-block tooltip-container"><b id="link">{{url('/')}}/{{Session::get('note_url', '')}}</b><span class="tooltip">Copied to clipboard</span></div>
                <div class="button-group">
                    <div class="secondary-button w-button" id="copyNote">Copy note link</div>
                    <div class="secondary-button w-button">Email link</div>
                    <div class="primary-button w-button right">Destroy note now</div>
                </div>
            </div>
        </div>
    </div>
</main>