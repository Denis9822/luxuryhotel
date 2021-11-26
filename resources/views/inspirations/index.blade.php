@extends('layouts.index',[
    'title' => "Best Musical Instruments - Top Reviews In 2021 | northeastorchestra.org",
    'description' => "Expert music gear and equipment reviews. Don't know what kind of gear you need? Get personal recommendations from our biggest music nerds.",
    'header' => 2,
])

@section('content')

    <div class="page-template-content">
        <div class="container">
            <div class="bravo-list-locations  style_4 ">
                <div class="title text-center">
                    Luxury Hotels Inspirations
                </div>
                <div class="sub-title text-center">
                    Discover the Best Hotels with our Handpicked Hotel Guides.
                </div>
                <div class="list-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="destination-item ">
                                <a href="{{route('inspirations.show',['id' => 1])}}">
                                    <div class="image" style="background: url(http://luxuryhotel/uploads/demo/location/location-1.jpg)">
                                        <div class="effect"></div>
                                        <div class="content">
                                            <h4 class="title">Paris</h4>

                                            <div class="desc">
                                                <span>5 Star Best Paris Luxury Hotels</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="destination-item ">
                                <a href="{{route('inspirations.show',['id' => 1])}}">
                                    <div class="image" style="background: url(http://luxuryhotel/uploads/demo/location/location-2.jpg)">
                                        <div class="effect"></div>
                                        <div class="content">
                                            <h4 class="title">New York</h4>

                                            <div class="desc">
                                                <span>5 Star Best New York Luxury Hotels</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="destination-item ">
                                <a href="{{route('inspirations.show',['id' => 1])}}">
                                    <div class="image" style="background: url(http://luxuryhotel/uploads/demo/location/location-3.jpg)">
                                        <div class="effect"></div>
                                        <div class="content">
                                            <h4 class="title">California</h4>

                                            <div class="desc">
                                                <span>5 Star Best California Luxury Hotels</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="destination-item ">
                                <a href="{{route('inspirations.show',['id' => 1])}}">
                                    <div class="image" style="background: url(http://luxuryhotel/uploads/demo/location/location-4.jpg)">
                                        <div class="effect"></div>
                                        <div class="content">
                                            <h4 class="title">United States</h4>

                                            <div class="desc">
                                                <span>5 Star Best United States Luxury Hotels</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="destination-item ">
                                <a href="{{route('inspirations.show',['id' => 1])}}">
                                    <div class="image" style="background: url(http://luxuryhotel/uploads/demo/location/location-5.jpg)">
                                        <div class="effect"></div>
                                        <div class="content">
                                            <h4 class="title">Los Angeles</h4>

                                            <div class="desc">
                                                <span>5 Star Best Los Angeles Luxury Hotels</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="destination-item ">
                                <a href="{{route('inspirations.show',['id' => 1])}}">
                                    <div class="image" style="background: url(http://luxuryhotel/uploads/demo/location/location-1.jpg)">
                                        <div class="effect"></div>
                                        <div class="content">
                                            <h4 class="title">New Jersey</h4>

                                            <div class="desc">
                                                <span>5 Star Best New Jersey Luxury Hotels</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="info">
                            <div class="info_title">
                                <h4><b>The Top 5 Star Luxury Hotels Compared.</b></h4>
                            </div>
                            <div class="info_text">
                                We find you the best luxury hotels worldwide from high end unique accommodation to 5 star deluxe resort rooms. Whether you are booking a luxury hotel in Rome, New York, Milan, Paris, London or Venice, we compare thousands of luxe accommodation options. Simply enter your destination for the best rates. For the latest in cool boutique hotels to the very best trendy and funky design hotels, LuxuryHotelsGuides.com is your guide to top 5 star lux accommodation deals.
                                <br> <br>
                                Our site lists over 1,000,000 hotel and accommodation options - boutique, expensive and cool high end hotels worldwide with facilities such as swimming pool, restaurants, bars and much more.
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

