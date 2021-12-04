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
        <div class="container">
            <div class="bravo-list-locations  style_4 ">
                <div class="title text-center">
                    {{__('translation.Luxury Hotels Inspirations')}}
                </div>
                <div class="sub-title text-center">
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

<style>
    .daterangepicker
    {
        right: 41% !important;
    }
</style>

@endsection

