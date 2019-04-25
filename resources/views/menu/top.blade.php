<div class="topbar"><a class="w-inline-block" href="{{route('main')}}" title="Home"><img class="logo-desktop" src="/img/notemask-logo.svg" alt=""/><img class="logo-mobile" src="/img/notemask-logo-mobile.svg" alt=""/></a>
    <div class="lang-selector">
        <div class="select language">
            <select id="language" name="self-desctucts">
                <option value="en" @if(App::getLocale() == 'en') selected @endif >English</option>
                <option value="ru" @if(App::getLocale() == 'ru') selected @endif >Russian</option>
                <option value="lv" @if(App::getLocale() == 'lv') selected @endif >Latvian</option>
            </select>
        </div>
    </div>
</div>