<main class="content">
    <div class="hero">
        <div class="header">
            @include('menu.top')
            <div class="main-h1-block">
                <h1 class="heading">Note contents</h1>
            </div>
        </div>
        <div class="note-input" id="content-psw">
            <div class="main-input">
                @if($timer == 'yes')
                    <div class="warning-block big">The note will self-destruct in <span id="countdown" data-destroy="{{$destroy}}" data-minute="minute" data-second="second"></span></div>
                @else:
                    <div class="warning-block big">Do not close or reload this page or you will lose the note forever!</div>
                @endif
                <div class="transparent-block">
                    <h3>Note password</h3>
                    <div class="caption">Enter the password to read this note</div>
                    <form class="flat" id="password-form">
                        <input class="ui-input" type="password" id="password" name="password" placeholder=""/>
                        <div class="primary-button w-button" id="check-password">Proceed</div>
                    </form>
                    <label id="field-error" class="error errors-show hide" for="field">Password is incorrect</label>
                </div>
            </div>
        </div>
    </div>
</main>
@section('js_footer')
    <script crossorigin="anonymous" defer="defer">
        $(document).ready(function() {
            $('#check-password').click(function() {
                var psw = $('#password').val();
                $.ajax({
                    url: "{{route('password')}}",
                    method: 'POST',
                    cache: false,
                    data: {
                        psw : psw,
                        url : "{{$url}}"
                    },
                    success: function(html){
                        if (html !== 'error') {
                            $('.errors-show').addClass('hide');
                            $('#password').removeClass('error');
                            $('#content-psw').html(html);
                        } else {
                            $('#password').addClass('error');
                            $('.errors-show').removeClass('hide');
                        }
                    }
                });
            });
        });
    </script>
@endsection