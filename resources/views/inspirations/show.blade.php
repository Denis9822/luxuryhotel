@extends('layouts.index',[
    'title' => $inspiration->seo_title ?? '',
    'description' => $inspiration->seo_description ?? '',
    'image' => $inspiration->seo_img ?? '',
    'type' => 'page',
    'title_t' => $inspiration->seo_title ?? '',
    'description_t' => $inspiration->seo_description ?? '',
    'image_t' => $inspiration->seo_img ?? ''
])
@section('links')
    <link href="/dist/frontend/module/location/css/location.css?_ver=2.2.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/libs/fotorama/fotorama.css">
@endsection
@section('content')

    <div class="bravo_detail_location">
        <div class="bravo_banner" style="background-image: linear-gradient(0deg,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.2)),url('/uploads/demo/location/banner-detail/banner-location-1.jpg') !important"></div>

        <div class="bravo_content">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-12 col-lg-8">
                        <h1 class="title-location">{{$inspiration->name}}</h1>
                        <div class="g-overview">
                            <div class="description">
                                {{$inspiration->description}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="g-thumbnail m-3">
                            <img src="{{$inspiration->preview_image}}" class="img-fluid lazy loaded" alt="Paris"  data-was-processed="true">
                        </div>
                    </div>
                </div>
                <div class="g-location-module py-5 border-top border-bottom">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <h3>{{__('translation.Explore the place')}}</h3>
                        </div>
                        <div class="col-12 col-lg-7">
                            <ul class="location-module-nav nav nav-pills justify-content-lg-end">
                                <li>
                                    <a class="active" href="#module-hotel" data-toggle="tab">Hotel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content clearfix py-5">
                        <div class="tab-pane active" id="module-hotel">
                            <div class="container">
                                <div class="bravo-list-hotel layout_normal">
                                    <div class="list-item">
                                        <div class="row">
                                            @foreach($hotels['result'] as $hotel)

                                            <div class="col-lg-3 col-md-6">
                                                <div class="item-loop ">
                                                    <div class="thumb-image ">
                                                        <a href="{{$hotel['url']}}?aid={{\App\Helpers\Setting::getSettingByName('referral')}}&selected_currency={{\App\Helpers\Currency::currencyCode()}}">
                                                            <img class="img-responsive lazy loaded"  alt="{{$hotel['hotel_name']}}" src="{{$hotel['max_photo_url']}}" data-was-processed="true">
                                                        </a>
                                                        <div class="star-rate">
                                                            <div class="list-star">
                                                                <ul class="booking-item-rating-stars">
                                                                    @for($i=0; $i < $hotel['class'];$i++)
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    @endfor
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="item-title">
                                                        <a href="{{$hotel['url']}}">
                                                            {{$hotel['hotel_name']}}
                                                        </a>
                                                    </div>
                                                    <div class="location">
                                                        <i class="icofont-paper-plane"></i>
                                                        {{$hotel['default_wishlist_name']}}, {{$hotel['country_trans']}} ({{$hotel['address']}})
                                                    </div>

                                                    <div class="info">
                                                        <div class="g-price">
                                                            <div class="prefix">
                                                                <span class="fr_text">from</span>
                                                            </div>
                                                            <div class="price">
                                                                @php
                                                                    if ($hotel['price_breakdown']['gross_price'])
                                                                        $price = $hotel['price_breakdown']['gross_price'];
                                                                    else
                                                                        $price = $hotel['min_total_price'];
                                                                @endphp

                                                                <span class="text-price"> {{Currency::currencyCode()}}  {{number_format(Hotel::getExchangePrice($price,$hotel['price_breakdown']['currency']))}} <span class="unit">/night</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach
                                        </div>
                                    </div>
{{--                                    <div class="bravo-pagination">--}}
{{--                                        <nav class="mt-2">--}}
{{--                                            <ul class="pagination">--}}

{{--                                                @foreach($pagination as $key => $pag)--}}
{{--                                                    @php--}}
{{--                                                        $link = $pag-1;--}}
{{--                                                    @endphp--}}
{{--                                                    @if($pag == $page+1)--}}
{{--                                                        <li class="active page-item " aria-current="page"><span class="page-link">{{$pag}}</span>--}}
{{--                                                        </li>--}}
{{--                                                    @else--}}
{{--                                                        <li><a class="page-link" href="/inspirations/{{$name}}/{{$link}}">{{$pag}}</a></li>--}}
{{--                                                    @endif--}}
{{--                                                @endforeach--}}

{{--                                            </ul>--}}
{{--                                        </nav>--}}

{{--                                    </div>--}}

                                </div>
                            </div>
                                <p class="text-center"><a class="btn btn-primary btn-search" href="{{route('hotel.show',['name' => $inspiration->name])}}">{{__('translation.View More')}}</a></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container ">
                <div class="page-template-content">
                    <div class="bravo-list-locations  style_4 ">
                    <div class="title">
                        {{__('translation.More Inspirations')}}
                    </div>
                    <div class="sub-title">
                        {{__('translation.Discover the Best Hotels with our Handpicked Hotel Guides.')}}
                    </div>
                    <div class="list-item">
                        <div class="row">
                            @foreach($inspirations as $inspiration)
                                <div class="col-lg-4 col-md-6">
                                    <div class="destination-item ">
                                        <a href="{{route('inspirations.show',['name' => $inspiration->slug])}}">
                                            <div class="image" style="background: url({{$inspiration->preview_image}})">
                                                <div class="effect"></div>
                                                <div class="content">
                                                    <h4 class="title">{{$inspiration->name}}</h4>

                                                    <div class="desc">
                                                        <span>{{__('translation.5 Star Best Paris Luxury Hotels')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                        <div class="row">
                            <div class="info">
                                <div class="info_title">
                                    <h4><b>{{__('translation.The Top 5 Star Luxury Hotels Compared.')}}</b></h4>
                                </div>
                                <div class="info_text">
                                    {{__('translation.We find you the best luxury hotels worldwide from high end unique accommodation to 5 star deluxe resort rooms. Whether you are booking a luxury hotel in Rome, New York, Milan, Paris, London or Venice, we compare thousands of luxe accommodation options. Simply enter your destination for the best rates. For the latest in cool boutique hotels to the very best trendy and funky design hotels, LuxuryHotelsGuides.com is your guide to top 5 star lux accommodation deals.')}}

                                    <br> <br>
                                    {{__('translation.Our site lists over 1,000,000 hotel and accommodation options - boutique, expensive and cool high end hotels worldwide with facilities such as swimming pool, restaurants, bars and much more.')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

<style>
    .daterangepicker
    {
        right: 41% !important;
    }
</style>

@endsection

