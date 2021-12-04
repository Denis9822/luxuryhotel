<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link href="/libs/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="/libs/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/libs/icofont/icofont.min.css" rel="stylesheet">
    <link href="/libs/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/libs/select2/css/select2.min.css" rel="stylesheet">
    <link href="/dist/frontend/css/notification.css" rel="newest stylesheet">
    <link href="/dist/frontend/css/app.css?_ver=2.2.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/libs/daterange/daterangepicker.css">
    <link rel="stylesheet" id="google-font-css-css" href="https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600" type="text/css" media="all">
    <link href="/libs/carousel-2/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="/libs/flags/css/flag-icon.min.css">
    @yield('links')

    <!-- Meta -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @if(isset($title))<title>{{$title ?? ''}}</title>@endif
    @if(isset($description))<meta name="description" content="{{$description ?? ''}}">@endif
    <link rel="canonical" href="{{url()->full()}}">
    <meta content="en-US" http-equiv="Content-Language">
    <meta property="og:locale" content="en_US">
    @if(isset($title))<meta property="og:title" content="{{$title ?? ''}}">@endif
    @if(isset($description))<meta property="og:description" content="{{$description ?? ''}}">@endif
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:site_name" content="{{request()->getHost()}}">
    @if(isset($type))<meta property="og:type" content="{{$type ?? ''}}">@endif
    @if(isset($section))<meta property="article:section" content="{{$section ?? ''}}">@endif
    @if(isset($published_time))<meta property="article:published_time" content="{{$published_time ?? ''}}">@endif
    @if(isset($modified_time))<meta property="article:modified_time" content="{{$modified_time ?? ''}}">@endif
    @if(isset($modified_time))<meta property="og:updated_time" content="{{$modified_time ?? ''}}">@endif
    @if(isset($image))<meta property="og:image" content="{{$image ?? ''}}">@endif
    @if(isset($card))<meta name="twitter:card" content="summary_large_image">@endif
    @if(isset($site))<meta name="twitter:site" content="@northeastorchestra.org">@endif
    @if(isset($title_t))<meta name="twitter:title" content="{{$title ?? ''}}">@endif
    @if(isset($description_t))<meta name="twitter:description" content="{{$description ?? ''}}">@endif
    @if(isset($image_t))<meta name="twitter:image" content="{{$image ?? ''}}">@endif
    <script>
        var bookingCore = {
            url:'http://luxuryhotel',
            url_root:'http://luxuryhotel',
            booking_decimals:0,
            thousand_separator:'.',
            decimal_separator:',',
            currency_position:'right_space',
            currency_symbol:'¥',
            currency_rate:'0.00917113',
            date_format:'MM/DD/YYYY',
            map_provider:'gmap',
            map_gmap_key:'',
            map_options:{
                map_lat_default:'',
                map_lng_default:'',
                map_clustering:'on',
                map_fit_bounds:'on',
            },
            routes:{
                login:'http://luxuryhotel/login',
                register:'http://luxuryhotel/register',
                checkout:'http://luxuryhotel/booking/doCheckout'
            },
            module:{
                hotel:'http://luxuryhotel/hotel'
            },
            currentUser: 1,
            isAdmin : 1,
            rtl: 0,
            markAsRead:'http://luxuryhotel/notify/markAsRead',
            markAllAsRead:'http://luxuryhotel/notify/markAllAsRead',
            loadNotify : 'http://luxuryhotel/notify/notifications',
            pusher_api_key : '',
            pusher_cluster : '',
        };
        var i18n = {
            warning:"Warning",
            success:"Success",
        };
        var daterangepickerLocale = {
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "first_day_of_week": 1,
            "daysOfWeek": [
                "Su",
                "Mo",
                "Tu",
                "We",
                "Th",
                "Fr",
                "Sa"
            ],
            "monthNames": [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ],
        };
    </script>
    <meta name="robots" content="noindex">
</head>

<body>

<body class="frontend-page header-normal   ">
    <div class="bravo_wrap">
        @include('layouts.header')
        @yield('content')
        @if(!isset($footer))
            @include('layouts.footer')
        @endif
    </div>
</body>
    <link rel="stylesheet" href="/libs/flags/css/flag-icon.min.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <!-- JS Global Compulsory  -->
    <script src="/libs/lazy-load/intersection-observer.js"></script>
    <script src="/libs/lodash.min.js"></script>
    <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/libs/carousel-2/owl.carousel.min.js"></script>
    <script src="/libs/select2/js/select2.min.js"></script>
    <script src="/js/functions.js?_ver=2.2.0"></script>
    <script src="/js/home.js?_ver=2.2.0"></script>
    <script src="/libs/pusher.min.js"></script>
    <script type="text/javascript" src="/libs/daterange/moment.min.js"></script>
    <script type="text/javascript" src="/libs/daterange/daterangepicker.min.js"></script>
    <script src="/libs/bootbox/bootbox.min.js"></script>
    @yield('script')

</body>

</html>
