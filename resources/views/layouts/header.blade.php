<div class="bravo_topbar">
    <div class="container">
        <div class="content">
            <div class="topbar-right ml-auto">
                <ul class="topbar-items">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="is_login">
                            {{\App\Helpers\Currency::currencyCode()}}
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu text-center width-30 ">
                            <li class="col-12 text-white">
                                <b>Top Currencies</b>
                            </li>
                            @foreach(\App\Helpers\Currency::getCurrencies(1) as $currency)
                                <li class="col-3">
                                    <a href="{{route('currency.set',['name' => $currency->shortcut])}}" class="is_login">
                                        {{$currency->shortcut}}
                                    </a>
                                </li>
                            @endforeach

                            <li class="col-12 text-white">
                                <b>Other Currencies</b>
                            </li>
                            @foreach(\App\Helpers\Currency::getCurrencies(2) as $currency)
                                <li class="col-3">
                                    <a href="{{route('currency.set',['name' => $currency->shortcut])}}" class="is_login">
                                        {{$currency->shortcut}}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="is_login">
                            {{\App\Helpers\Localization::countryCode()->name}}
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu text-left">
                            @foreach(\App\Helpers\Localization::getCountries() as $country)
                            <li>
                                <a href="{{route('localization.set',['name' => $country->shortcut])}}" class="is_login">
                                    <span class="flag-icon flag-icon-{{$country->flag}}"></span>
                                    {{$country->name}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @auth
                    <li class="login-item dropdown">
                        <a href="#" data-toggle="dropdown" class="login">Hi, {{auth()->user()->name}}
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-user text-left">

                            <li class="menu-hr"><a href="{{route('setting')}}"><i class="icon ion-ios-ribbon"></i> Admin Panel</a></li>
                            <li class="menu-hr">
                                <a href="{{route('adminexit')}}" onclick="event.preventDefault(); document.getElementById('logout-form-topbar').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>

                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="bravo_header">
    <div class="container">
        <div class="content">
            <div class="header-left">
                <a href="/" class="bravo-logo">
                    <img src="/images/other/{{ \App\Helpers\Setting::getSettingByName('logo')}}" alt="Logo">
                </a>
                <div class="bravo-menu">
                    <ul class="main-menu menu-generated"><li class=" depth-0"><a target="" href="/">{{__('translation.HOTELS')}}</a></li><li class=" depth-0"><a target="" href="/inspirations">{{__('translation.INSPIRATION')}}</a></li></ul>                </div>
            </div>
            <div class="header-right">
                <button class="bravo-more-menu">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="bravo-menu-mobile" style="display:none;">
        <div class="user-profile">
            <div class="b-close"><i class="icofont-scroll-left"></i></div>
            <div class="avatar"></div>
            @auth
            <ul>
                <li>
                    <a href="{{route('setting')}}">
                        <i class="icofont-user-suited"></i> Hi, {{auth()->user()->name}}
                    </a>
                </li>

                <li>
                    <a href="{{route('setting')}}"><i class="icon ion-ios-ribbon"></i> Admin panel</a>
                </li>
                <li>
                    <a href="{{route('adminexit')}}" onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>

                </li>

            </ul>
            @endauth
            <ul class="multi-lang">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="is_login">
                        {{\App\Helpers\Currency::currencyCode()}}
                        <i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu text-left width-auto">
                        <li class="col-12">
                            <b>Top Currencies</b>
                        </li>
                        @foreach(\App\Helpers\Currency::getCurrencies(1) as $currency)
                            <li >
                                <a href="{{route('currency.set',['name' => $currency->shortcut])}}" class="is_login">
                                    {{$currency->shortcut}}
                                </a>
                            </li>
                        @endforeach

                        <li class="col-12">
                            <b>Other Currencies</b>
                        </li>
                        @foreach(\App\Helpers\Currency::getCurrencies(2) as $currency)
                            <li>
                                <a href="{{route('currency.set',['name' => $currency->shortcut])}}" class="is_login">
                                    {{$currency->shortcut}}
                                </a>
                            </li>
                        @endforeach

                    </ul>

                </li>
            </ul>
            <ul class="multi-lang">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="is_login">
                        {{\App\Helpers\Localization::countryCode()->name}}
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu text-left">
                        @foreach(\App\Helpers\Localization::getCountries() as $country)
                            <li>
                                <a href="{{route('localization.set',['name' => $country->shortcut])}}" class="is_login">
                                    <span class="flag-icon flag-icon-{{$country->flag}}"></span>
                                    {{$country->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>

        <div class="g-menu" style="max-height: 923px;">
            <ul class="main-menu menu-generated"><li class=" depth-0"><a target="" href="/hotel">Hotels</a></li><li class=" depth-0"><a target="" href="/inspirations">Inspirations</a></li></ul>        </div>
    </div>
</div>
