<div class="main-input">
    @if($timer == 'yes')
        <div class="warning-block">The note will self-destruct in <span id="countdown" data-destroy="{{$destroy}}" data-minute="minute" data-second="second"></span></div>
    @else:
        <div class="warning-block">This note was destroyed. If you need to keep it, copy it before closing this window!</div>
    @endif
    <div class="info-block note-preview" id="psw-text">{{$text}}</div>
    <div class="button-group">
        <div class="tooltip-container"><span class="tooltip">Copied to clipboard</span></div>
        <div class="secondary-button w-button" id="copyText">Select note text</div>
        @if($timer == 'yes')
            <form action="{{route('destroy')}}" method="post" class="right">
                {{csrf_field()}}
                <input type="hidden" name="d" value="{{md5($id)}}">
                <input type="hidden" name="url" value="{{$url}}">
                <button class="primary-button w-button right">Destroy now</button>
            </form>
        @endif
    </div>
</div>
<script>
    countDownTimer();

    $('#copyText').on('click', function(){
        var textToCopy = $('#psw-text').text();

//        console.log(textToCopy)
        copyToClipboard(textToCopy);

        $('.tooltip-container').addClass('open');

        setTimeout(function(){
            $('.tooltip-container').removeClass('open');
        }, 1000)
    })
</script>