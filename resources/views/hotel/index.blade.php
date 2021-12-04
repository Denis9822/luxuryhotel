@extends('layouts.index',[
    'title' => str_replace('$name',"$name",\App\Helpers\Pages::getSeo()->seo_title) ?? '',
    'description' => str_replace('$name',"$name",\App\Helpers\Pages::getSeo()->seo_description) ?? '',
    'image' => \App\Helpers\Pages::getSeo()->seo_img ?? '',
    'type' => 'page',
    'title_t' => str_replace('$name',"$name",\App\Helpers\Pages::getSeo()->seo_title) ?? '',
    'description_t' => str_replace('$name',"$name",\App\Helpers\Pages::getSeo()->seo_description) ?? '',
    'image_t' => \App\Helpers\Pages::getSeo()->seo_img ?? ''
])

@section('links')
    <link href="/dist/frontend/module/hotel/css/hotel.css?_ver=2.2.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/libs/ion_rangeslider/css/ion.rangeSlider.min.css">
@endsection

@section('content')


    <div class="bravo_search_hotel">
        <div class="bravo_banner"
             style="background-image: url(/uploads/demo/hotel/banner-search-hotel.jpg)">
            <div class="container">
                <h1>
                    {{__('translation.Search for')}} {{$name}}
                </h1>
            </div>
        </div>
        <div class="bravo_form_search">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form action="{{route('hotel.show')}}" class="form bravo_form" method="get">
                            <div class="g-field-search">
                                <div class="row">
                                    <div class="col-md-8 border-right">
                                        <div class="form-group">
                                            <i class="field-icon fa icofont-map"></i>
                                            <div class="form-content">

                                                <input class="hotel_location" type="text" name="name" value="{{$name}}" placeholder="Location">
                                                <input class="" type="hidden" name="search_id" value="" >
                                                <input class="" type="hidden" name="search_type" value="" >
                                                <div class="search-form">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-right">
                                        <div class="form-group">
                                            <i class="field-icon icofont-wall-clock"></i>
                                            <div class="form-content">
                                                <div class="form-date-search-hotel">
                                                    <div class="date-wrapper">
                                                        <div class="check-in-wrapper">
                                                            <label>{{__('translation.Check In - Out')}}</label>
                                                            <div class="render check-in-render">{{$date_start}}</div>
                                                            <span> - </span>
                                                            <div class="render check-out-render">{{$date_end}}</div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-in-input" value="{{$date_start}}" name="start">
                                                    <input type="hidden" class="check-out-input" value="{{$date_end}}" name="end">
                                                    <input type="text" class="check-in-out" name="date" value="{{\Illuminate\Support\Carbon::today()->format('Y-m-d')}} - {{\Illuminate\Support\Carbon::tomorrow()->format('Y-m-d')}}">
                                                </div>
                                            </div>
                                        </div>                                                </div>
                                </div>
                            </div>
                            <div class="g-button-submit">
                                <button class="btn btn-primary btn-search" type="submit">{{__('translation.Search')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 m-auto">
                    <div class="bravo-list-item">
                        @auth
                        <div class="topbar-search">
                            <h2 class="text">
                                {{$hotels['count']}} hotels found
                            </h2>
                            <div class="control">

                                <div class="item">
                                    <div class="item-title">
                                        Sort by:
                                    </div>
                                    <div class="dropdown">
                                        <span class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            @if ($order == "distance")
                                                Distance
                                            @elseif($order == "popularity")
                                                Popularity
                                            @elseif($order == "price")
                                                Price
                                            @elseif($order == "review_score")
                                                Review score
                                            @elseif($order == "class_descending")
                                                Hotel Class
                                            @endif
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right"
                                             aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item"
                                               href="/hotel?{{Hotel::addParameterToUrl(app('request')->getQueryString(),'order','distance',$order)}}">Distance</a>
                                            <a class="dropdown-item"
                                               href="/hotel?{{Hotel::addParameterToUrl(app('request')->getQueryString(),'order','popularity',$order)}}">Popularity</a>
                                            <a class="dropdown-item"
                                               href="/hotel?{{Hotel::addParameterToUrl(app('request')->getQueryString(),'order','price',$order)}}">Price</a>
                                            <a class="dropdown-item"
                                               href="/hotel?{{Hotel::addParameterToUrl(app('request')->getQueryString(),'order','review_score',$order)}}">Review score</a>
                                            <a class="dropdown-item"
                                               href="/hotel?{{Hotel::addParameterToUrl(app('request')->getQueryString(),'order','class_descending',$order)}}">Hotel Class</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endauth
                        <div class="list-item">
                            <div class="row hotel_add">
                            </div>
                        </div>
                            <div class="bravo-pagination">
                                @if($countHotels > 0)
                                    <button type="button" class="btn btn-primary search_add" max_page="{{$max_page}}" date_start="{{$date_start_format1}}" order="{{$order}}" date_end="{{$date_end_format1}}" last_page="-1" dest_id="{{$code}}" dest_type="{{$type}}" >Show more</button>
                                @endif
                                <div class="spinner-border" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>

                            <a class="hover_custom" target="_blank" href="{{$hotels['result'][0]['url'] ?? "https://www.booking.com/"}}?aid={{\App\Helpers\Setting::getSettingByName('referral')}}&selected_currency={{\App\Helpers\Currency::currencyCode()}}&checkin={{$date_start_format ?? ''}}&checkout={{$date_end_format ?? ''}}">
                            <div class="booking_btn" style="background-color:#CBE9F3; padding: 8px;">
                                <p style="text-align: center; margin-bottom: 0.5rem;">
                                    <span style="color:#006699">
                                        <b>{{__('translation.More Accommodation')}}&gt;</b>
                                    </span>
                                </p>
                                <p style="text-align: center; margin-bottom: 0;">
                                    <span style="text-align: center">
                                        <b>{{__('translation.Hotels, Holiday Rentals, Apartments')}}</b>
                                        <span style="color:#666666">(Booking.com)</span>
                                    </span>
                                </p>
                            </div>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .daterangepicker {
            right: 41% !important;
        }
    </style>
@section('script')
    <script type="text/javascript" src="/module/hotel/js/hotel.js?_ver=2.2.0"></script>
    <script type="text/javascript" src="/libs/ion_rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="/js/search.js"></script>
@endsection
@endsection

