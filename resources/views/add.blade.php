<main class="content">
    <div class="hero">
        <div class="header">
            @include('menu.top')
            <div class="main-h1-block">
                <h1 class="heading">{{__('www.send_notes')}}</h1>
            </div>
        </div>
        <div class="note-input">
            <div class="main-input">
                <div class="form-block w-form">
                    <form id="createNode" action="{{route('create')}}" name="email-form" method="post">
                        {{ csrf_field() }}
                        <div class="text-area-wrap">
                            <textarea class="textarea w-input" id="field" style="box-shadow: 1px 1px 4px 0 rgba(46,46,46,.38);" name="text" placeholder="Write your note here..." maxlength="5000" required=""></textarea>
                        </div>

                        <div class="button-group">
                            <input class="primary-button w-button" type="submit" value="Create note" data-wait="Please wait..."/><a class="right settings-button w-inline-block" href="/"><img class="settings-icon" src="/img/settings-icon.svg" alt=""/>
                                <div data-open="Show options" data-close="Disable options">Show options</div></a>
                        </div>

                        <!-- <div class="spacer"></div> -->

                        <div class="slide-toggle settings-block hide">
                            <div class="row gap-60">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="transparent-block">
                                        <h3>Note self-destructs</h3>
                                        <div class="select">
                                            <select id="slct" name="self-desctucts">
                                                <option value="0">after reading</option>
                                                <option value="1">1 hour from now</option>
                                                <option value="24">24 hours from now</option>
                                                <option value="168">7 days from now</option>
                                                <option value="720">30 days from now</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="transparent-block no-heading">
                                        <label class="checkbox-container">Do not ask for confirmation before showing and destroying the note
                                            <input type="checkbox" name="dont_ask_confirm" value="1" /><span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="transparent-block">
                                        <h3>Set password</h3>
                                        <div class="caption">Enter a custom password to encrypt the note</div>
                                        <input class="ui-input" name="password" type="password" id="password"/>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="transparent-block">
                                        <div class="caption">Confirm password</div>
                                        <input class="ui-input" name="password_repeat" type="password" id="passwordRepeat"/>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="transparent-block">
                                        <h3>Destruction notification</h3>
                                        <div class="caption">E-mail me when note is destroyed</div>
                                        <input class="ui-input" type="email" name="email" value=""/>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="transparent-block">
                                        <div class="caption">Reference name for the note (optional)</div>
                                        <input class="ui-input" type="text" name="name" value=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="spacer"></div>
                        <div class="button-group">
                            <input class="primary-button w-button" type="submit" value="Create note" data-wait="Please wait..."/><a class="right settings-button w-inline-block" href="/"><img class="settings-icon" src="/img/settings-icon.svg" alt=""/>
                                <div data-open="Show options" data-close="Disable options">Show options</div></a>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

