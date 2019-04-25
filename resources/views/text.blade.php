<main class="content">
    <div class="hero">
        <div class="header">
            @include('menu.top')
            <div class="main-h1-block">
                <h1 class="heading">Note contents</h1>
            </div>
        </div>
        <div class="note-input">
            <div class="main-input">

                @if($timer == 'yes')
                    <div class="warning-block">The note will self-destruct in <span id="countdown" data-destroy="{{$destroy}}" data-minute="minute" data-second="second"></span></div>
                @else
                    <div class="warning-block">This note was destroyed. If you need to keep it, copy it before closing this window!</div>
                @endif
                <div class="info-block note-preview" id="link">{{$text}}</div>
                <div class="button-group">
                    <div class="tooltip-container"><span class="tooltip">Copied to clipboard</span></div>
                    <div class="secondary-button w-button" id="copyNote">Select note text</div>
                </div>
            </div>
        </div>
    </div>
</main>