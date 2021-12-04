@extends('layouts.index',[
    'title' => \App\Helpers\Pages::getSeo()->seo_title ?? '',
    'description' => \App\Helpers\Pages::getSeo()->seo_description ?? '',
    'image' => \App\Helpers\Pages::getSeo()->seo_img ?? '',
    'type' => 'page',
    'title_t' => \App\Helpers\Pages::getSeo()->seo_title ?? '',
    'description_t' => \App\Helpers\Pages::getSeo()->seo_description ?? '',
    'image_t' => \App\Helpers\Pages::getSeo()->seo_img ?? ''
])

@section('content')

    <div class="page-template-content">
        <div class="bravo-form-search-all carousel  bravo-form-search-slider ">
            <div class="effect">
                <div class="owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                             style="transform: translate3d(-4126px, 0px, 0px); transition: all 0s ease 0s; width: 12378px;">

                            <div class="owl-item active" style="width: 2063px;">
                                <div class="item">
                                    <div class="item-bg"
                                         style="background-image: linear-gradient(0deg,rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)),url('/uploads/demo/tour/banner-detail/banner-tour-4.jpg') !important"></div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 2063px;">
                                <div class="item">
                                    <div class="item-bg"
                                         style="background-image: linear-gradient(0deg,rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)),url('/uploads/demo/general/home-mix.jpg') !important"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span>
                        </button>
                        <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span>
                        </button>
                    </div>
                    <div class="owl-dots">
                        <button role="button" class="owl-dot active"><span></span></button>
                        <button role="button" class="owl-dot"><span></span></button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-heading">{{__('translation.The Best Luxury Hotels')}}</h1>
                        <div class="sub-heading"></div>
                        <div class="g-form-control">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="bravo_hotel">
                                    <a href="#bravo_hotel" class=" active " aria-controls="bravo_hotel" role="tab" data-toggle="tab">
                                        <i class="fa fa-building-o"></i>
                                        {{__('translation.Hotel')}}
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane  active " id="bravo_hotel">
                                    <form action="{{route('hotel.show')}}" class="form bravo_form" method="get">
                                        <div class="g-field-search">
                                            <div class="row">
                                                <div class="col-md-8 border-right">
                                                    <div class="form-group">
                                                        <i class="field-icon fa icofont-map"></i>
                                                        <div class="form-content">

                                                            <input class="hotel_location" type="text" name="name" value="" placeholder="Location">
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
                                                                        <div class="render check-in-render">{{\Illuminate\Support\Carbon::today()->format('m/d/Y')}}</div>
                                                                        <span> - </span>
                                                                        <div class="render check-out-render">{{\Illuminate\Support\Carbon::tomorrow()->format('m/d/Y')}}</div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" class="check-in-input" value="{{\Illuminate\Support\Carbon::today()->format('m/d/Y')}}" name="start">
                                                                <input type="hidden" class="check-out-input" value="{{\Illuminate\Support\Carbon::tomorrow()->format('m/d/Y')}}" name="end">
                                                                <input type="text" class="check-in-out" name="date" value="{{\Illuminate\Support\Carbon::today()->format('Y-m-d')}} - {{\Illuminate\Support\Carbon::tomorrow()->format('Y-m-d')}}">
                                                            </div>
                                                        </div>
                                                    </div>                                                </div>
                                            </div>
                                        </div>
                                        <div class="g-button-submit">
                                            <button class="btn btn-primary btn-search" type="submit">{{__('translation.Search')}}</button>
                                        </div>
                                    </form>                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        </div>
        <div class="container">
            <div class="bravo-list-locations  style_4 ">
                <div class="title">
                    {{__('translation.Top Inspirations')}}
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
                        <div class="more">
                            <a href="{{route('inspirations.index')}}">{{__('translation.Load more')}}</a>
                        </div>
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

<style>
    .daterangepicker
    {
        right: 41% !important;
    }
</style>
@section('script')
    <script src="/js/search.js"></script>
@endsection
@endsection

