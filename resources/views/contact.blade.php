@extends('layouts.main')

@section('content')

    <main class="content">
        <div class="hero">
            <div class="header">
                <div class="topbar"><a class="w-inline-block" href="http://notemask.com" title="Home"><img class="logo-desktop" src="http://notemask.com/img/notemask-logo.svg" alt=""/><img class="logo-mobile" src="http://notemask.com/img/notemask-logo-mobile.svg" alt=""/></a>
                    <div class="lang-selector">
                        <div class="select language">
                            <select id="language" name="self-desctucts">
                                <option value="en"  selected  >English</option>
                                <option value="ru"  >Russian</option>
                                <option value="lv"  >Latvian</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="main-h1-block">
                    <h1 class="heading">Contact Us</h1>
                </div>
            </div>
            <div class="note-input">
                <div class="main-input">
                    <div class="contact_container form-block w-form">
                        @if (session('success'))
                            <h3>
                                {{ session('success') }}
                            </h3>
                        @else
                            <form id="createNode" action="{{route('form')}}" name="email-form" method="post">
                                {{ csrf_field() }}
                                <h3>
                                    If you have any questions about Notemask or if you want to share your comments or ideas, please send us an e-mail at
                                    <a href="mailto:info@notemask.com">info@notemask.com</a>
                                </h3>

                                <div class="field field-group">
                                    <input type="text" name="name" class="name-field text-field w-input" placeholder="Name" required="">
                                </div>

                                <div class="field field-group">
                                    <input type="text" name="email" class="emai-field text-field w-input" placeholder="Email" required="">
                                </div>

                                <div class="field field-group">
                                    <textarea class="textarea w-input" name="text" placeholder="Message" maxlength="5000" required=""></textarea>
                                </div>

                                <div class="button-group">
                                    <input class="primary-button w-button" type="submit" value="Submit" data-wait="Please wait..."/>
                                </div>
                            </form>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection