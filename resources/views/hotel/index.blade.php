@extends('layouts.index',[
    'title' => "Best Musical Instruments - Top Reviews In 2021 | northeastorchestra.org",
    'description' => "Expert music gear and equipment reviews. Don't know what kind of gear you need? Get personal recommendations from our biggest music nerds.",
    'header' => 2,
])
@section('links')
    <link href="/dist/frontend/module/hotel/css/hotel.css?_ver=2.2.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/libs/ion_rangeslider/css/ion.rangeSlider.min.css">
@endsection

@section('content')

    <div class="bravo_search_hotel">
        <div class="bravo_banner"
             style="background-image: url(http://luxuryhotel/uploads/demo/hotel/banner-search-hotel.jpg)">
            <div class="container">
                <h1>
                    Search for hotel
                </h1>
            </div>
        </div>
        <div class="bravo_form_search">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form action="http://luxuryhotel/hotel" class="form bravo_form" method="get">
                            <div class="g-field-search">
                                <div class="row">
                                    <div class="col-md-4 border-right">
                                        <div class="form-group">
                                            <i class="field-icon fa icofont-map"></i>
                                            <div class="form-content">
                                                <label> Location </label>
                                                <div class="smart-search">
                                                    <input type="text"
                                                           class="smart-search-location parent_text form-control"
                                                           readonly="" placeholder="Where are you going?" value=""
                                                           data-onload="Loading..."
                                                           data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;}]">
                                                    <input type="hidden" class="child_id" name="location_id" value="">
                                                    <div class="bravo-autocomplete">
                                                        <div class="list-item">
                                                            <div class="item" data-id="1" data-text=" Paris"><i
                                                                    class="icofont-location-pin"></i> Paris
                                                            </div>
                                                            <div class="item" data-id="2"
                                                                 data-text=" New York, United States"><i
                                                                    class="icofont-location-pin"></i> New York, United
                                                                States
                                                            </div>
                                                            <div class="item" data-id="3" data-text=" California"><i
                                                                    class="icofont-location-pin"></i> California
                                                            </div>
                                                            <div class="item" data-id="4" data-text=" United States"><i
                                                                    class="icofont-location-pin"></i> United States
                                                            </div>
                                                            <div class="item" data-id="5" data-text=" Los Angeles"><i
                                                                    class="icofont-location-pin"></i> Los Angeles
                                                            </div>
                                                            <div class="item" data-id="6" data-text=" New Jersey"><i
                                                                    class="icofont-location-pin"></i> New Jersey
                                                            </div>
                                                            <div class="item" data-id="7" data-text=" San Francisco"><i
                                                                    class="icofont-location-pin"></i> San Francisco
                                                            </div>
                                                            <div class="item" data-id="8" data-text=" Virginia"><i
                                                                    class="icofont-location-pin"></i> Virginia
                                                            </div>
                                                        </div>
                                                        <div class="message">Loading...</div>
                                                    </div>
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
                                                            <label>Check In - Out</label>
                                                            <div class="render check-in-render">11/26/2021</div>
                                                            <span> - </span>
                                                            <div class="render check-out-render">11/27/2021</div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-in-input" value="11/26/2021"
                                                           name="start">
                                                    <input type="hidden" class="check-out-input" value="11/27/2021"
                                                           name="end">
                                                    <input type="text" class="check-in-out" name="date"
                                                           value="2021-11-26 - 2021-11-27">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-right">
                                        <div class="form-select-guests">
                                            <div class="form-group">
                                                <i class="field-icon icofont-travelling"></i>
                                                <div class="form-content dropdown-toggle" data-toggle="dropdown">
                                                    <div class="wrapper-more">
                                                        <label> Guests </label>
                                                        <div class="render">
                                                            <span class="adults"><span class="one ">1 Adult</span> <span
                                                                    class=" d-none  multi" data-html=":count Adults">1 Adults</span></span>
                                                            -
                                                            <span class="children">
                            <span class="one " data-html=":count Child">0 Child</span>
                            <span class="multi  d-none " data-html=":count Children">0 Children</span>
                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu select-guests-dropdown">
                                                    <div class="dropdown-item-row">
                                                        <div class="label">Rooms</div>
                                                        <div class="val">
                                                            <span class="btn-minus" data-input="room"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input type="number" name="room"
                                                                                               value="1" min="1"></span>
                                                            <span class="btn-add" data-input="room"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item-row">
                                                        <div class="label">Adults</div>
                                                        <div class="val">
                                                            <span class="btn-minus" data-input="adults"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input type="number"
                                                                                               name="adults" value="1"
                                                                                               min="1"></span>
                                                            <span class="btn-add" data-input="adults"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item-row">
                                                        <div class="label">Children</div>
                                                        <div class="val">
                                                            <span class="btn-minus" data-input="children"><i
                                                                    class="icon ion-md-remove"></i></span>
                                                            <span class="count-display"><input type="number"
                                                                                               name="children" value="0"
                                                                                               min="0"></span>
                                                            <span class="btn-add" data-input="children"><i
                                                                    class="icon ion-ios-add"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="g-button-submit">
                                <button class="btn btn-primary btn-search" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="bravo_filter">
                        <form action="http://luxuryhotel/hotel" class="bravo_form_filter">
                            <div class="filter-title">
                                FILTER BY
                            </div>
                            <div class="g-filter-item">
                                <div class="item-title">
                                    <h3>Filter Price</h3>
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </div>
                                <div class="item-content">
                                    <div class="bravo-filter-price">
                                        <span class="irs irs--flat js-irs-0 irs-with-grid"><span class="irs"><input
                                            type="hidden" class="filter-price" name="price_range" data-symbol=" $"
                                            data-min="300" data-max="900" data-from="300" data-to="900" readonly=""
                                            value="300;900" tabindex="-1">
                                            </span>
                                        </span>
                                        <button type="submit" class="btn btn-link btn-apply-price-range">APPLY</button>
                                    </div>
                                </div>
                            </div>
                            <div class="g-filter-item">
                                <div class="item-title">
                                    <h3>Hotel Star</h3>
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </div>
                                <div class="item-content">
                                    <ul>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input name="star_rate[]" type="checkbox" value="5">
                                                    <span class="checkmark"></span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input name="star_rate[]" type="checkbox" value="4">
                                                    <span class="checkmark"></span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input name="star_rate[]" type="checkbox" value="3">
                                                    <span class="checkmark"></span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input name="star_rate[]" type="checkbox" value="2">
                                                    <span class="checkmark"></span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input name="star_rate[]" type="checkbox" value="1">
                                                    <span class="checkmark"></span>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="g-filter-item">
                                <div class="item-title">
                                    <h3>Review Score</h3>
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </div>
                                <div class="item-content">
                                    <ul>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input name="review_score[]" type="checkbox" value="5">
                                                    <span class="checkmark"></span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input name="review_score[]" type="checkbox" value="4">
                                                    <span class="checkmark"></span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input name="review_score[]" type="checkbox" value="3">
                                                    <span class="checkmark"></span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input name="review_score[]" type="checkbox" value="2">
                                                    <span class="checkmark"></span>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input name="review_score[]" type="checkbox" value="1">
                                                    <span class="checkmark"></span>
                                                    <i class="fa fa-star"></i>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="g-filter-item">
                                <div class="item-title">
                                    <h3> Property type </h3>
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </div>
                                <div class="item-content">
                                    <ul>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="32"> Apartments
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="33"> Hotels
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="34"> Homestays
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="35"> Villas
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="36"> Boats
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="37"> Motels
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="38"> Resorts
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="39"> Lodges
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="40"> Holiday homes
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="41"> Cruises
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-link btn-more-item">More <i
                                            class="fa fa-caret-down"></i></button>
                                </div>
                            </div>
                            <div class="g-filter-item">
                                <div class="item-title">
                                    <h3> Facilities </h3>
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </div>
                                <div class="item-content">
                                    <ul>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="42"> Wake-up call
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="43"> Car hire
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="44"> Bicycle hire
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="45"> Flat Tv
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="46"> Laundry and dry
                                                    cleaning
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="47"> Internet – Wifi
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="48"> Coffee and tea
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-link btn-more-item">More <i
                                            class="fa fa-caret-down"></i></button>
                                </div>
                            </div>
                            <div class="g-filter-item">
                                <div class="item-title">
                                    <h3> Hotel Service </h3>
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </div>
                                <div class="item-content">
                                    <ul>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="49"> Havana Lobby bar
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="50"> Fiesta Restaurant
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="51"> Hotel transport
                                                    services
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="52"> Free luggage
                                                    deposit
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="53"> Laundry Services
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="54"> Pets welcome
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="hide">
                                            <div class="bravo-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms[]" value="55"> Tickets
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-link btn-more-item">More <i
                                            class="fa fa-caret-down"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="bravo-list-item">
                        <div class="topbar-search">
                            <h2 class="text">
                                11 hotels found
                            </h2>
                            <div class="control">

                                <div class="item">
                                    <div class="item-title">
                                        Sort by:
                                    </div>
                                    <div class="dropdown">
        <span class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Recommended
                    </span>
                                        <div class="dropdown-menu dropdown-menu-right"
                                             aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="http://luxuryhotel/hotel?orderby=">Recommended</a>
                                            <a class="dropdown-item"
                                               href="http://luxuryhotel/hotel?orderby=price_low_high">Price (Low to
                                                high)</a>
                                            <a class="dropdown-item"
                                               href="http://luxuryhotel/hotel?orderby=price_high_low">Price (High to
                                                low)</a>
                                            <a class="dropdown-item"
                                               href="http://luxuryhotel/hotel?orderby=rate_high_low">Rating (High to
                                                low)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="item-loop-list ">
                                        <div class="featured">
                                            Featured
                                        </div>
                                        <div class="thumb-image">
                                            <a href="http://luxuryhotel/hotel/dylan-hotel">
                                                <img class="img-responsive lazy loaded"
                                                     data-src="http://luxuryhotel/uploads/demo/space/space-2.jpg"
                                                     alt="Dylan Hotel"
                                                     src="http://luxuryhotel/uploads/demo/space/space-2.jpg"
                                                     data-was-processed="true">
                                            </a>
                                        </div>
                                        <div class="g-info">
                                            <div class="star-rate">
                                                <div class="list-star">
                                                    <ul class="booking-item-rating-stars">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                <a href="http://luxuryhotel/hotel/dylan-hotel">
                                                    Dylan Hotel
                                                </a>
                                            </div>
                                            <div class="terms">
                                                <div class="g-attributes">
                                                    <span class="attr-title"><i class="icofont-medal"></i> Facilities: </span>
                                                    <span class="item car-hire term-43">Car hire</span>
                                                    <span class="item bicycle-hire term-44">Bicycle hire</span>
                                                    <span class="item flat-tv term-45">Flat Tv</span>
                                                    <span class="item laundry-and-dry-cleaning term-46">Laundry and dry cleaning</span>
                                                    <span class="item internet-wifi term-47">Internet – Wifi</span>
                                                    <span class="item coffee-and-tea term-48">Coffee and tea</span>
                                                </div>
                                            </div>
                                            <div class="location">
                                                <i class="icofont-paper-plane"></i>
                                                New York, United States
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="item-loop-list ">
                                        <div class="featured">
                                            Featured
                                        </div>
                                        <div class="thumb-image">
                                            <a href="http://luxuryhotel/hotel/parian-holiday-villas">
                                                <img class="img-responsive lazy loaded"
                                                     data-src="http://luxuryhotel/uploads/demo/space/space-13.jpg"
                                                     alt="Parian Holiday Villas"
                                                     src="http://luxuryhotel/uploads/demo/space/space-13.jpg"
                                                     data-was-processed="true">
                                            </a>

                                        </div>
                                        <div class="g-info">
                                            <div class="star-rate">
                                                <div class="list-star">
                                                    <ul class="booking-item-rating-stars">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                <a href="http://luxuryhotel/hotel/parian-holiday-villas">
                                                    Parian Holiday Villas
                                                </a>
                                            </div>
                                            <div class="terms">
                                                <div class="g-attributes">
                                                    <span class="attr-title"><i class="icofont-medal"></i> Facilities: </span>
                                                    <span class="item wake-up-call term-42">Wake-up call</span>
                                                    <span class="item car-hire term-43">Car hire</span>
                                                    <span class="item bicycle-hire term-44">Bicycle hire</span>
                                                    <span class="item flat-tv term-45">Flat Tv</span>
                                                    <span class="item laundry-and-dry-cleaning term-46">Laundry and dry cleaning</span>
                                                    <span class="item internet-wifi term-47">Internet – Wifi</span>
                                                </div>
                                            </div>
                                            <div class="location">
                                                <i class="icofont-paper-plane"></i>
                                                Paris
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="item-loop-list ">
                                        <div class="thumb-image">
                                            <a href="http://luxuryhotel/hotel/the-may-fair-hotel">
                                                <img class="img-responsive lazy loaded"
                                                     data-src="http://luxuryhotel/uploads/demo/space/space-5.jpg"
                                                     alt="The May Fair Hotel"
                                                     src="http://luxuryhotel/uploads/demo/space/space-5.jpg"
                                                     data-was-processed="true">
                                            </a>

                                        </div>
                                        <div class="g-info">
                                            <div class="star-rate">
                                                <div class="list-star">
                                                    <ul class="booking-item-rating-stars">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                <a href="http://luxuryhotel/hotel/the-may-fair-hotel">
                                                    The May Fair Hotel
                                                </a>
                                            </div>
                                            <div class="terms">
                                                <div class="g-attributes">
                                                    <span class="attr-title"><i class="icofont-medal"></i> Facilities: </span>
                                                    <span class="item wake-up-call term-42">Wake-up call</span>
                                                    <span class="item car-hire term-43">Car hire</span>
                                                    <span class="item bicycle-hire term-44">Bicycle hire</span>
                                                    <span class="item flat-tv term-45">Flat Tv</span>
                                                    <span class="item laundry-and-dry-cleaning term-46">Laundry and dry cleaning</span>
                                                    <span class="item internet-wifi term-47">Internet – Wifi</span>
                                                    <span class="item coffee-and-tea term-48">Coffee and tea</span>
                                                </div>
                                            </div>
                                            <div class="location">
                                                <i class="icofont-paper-plane"></i>
                                                Paris
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="item-loop-list ">
                                        <div class="thumb-image">
                                            <a href="http://luxuryhotel/hotel/stewart-hotel">
                                                <img class="img-responsive lazy loaded"
                                                     data-src="http://luxuryhotel/uploads/demo/space/space-12.jpg"
                                                     alt="Stewart Hotel"
                                                     src="http://luxuryhotel/uploads/demo/space/space-12.jpg"
                                                     data-was-processed="true">
                                            </a>

                                        </div>
                                        <div class="g-info">
                                            <div class="star-rate">
                                                <div class="list-star">
                                                    <ul class="booking-item-rating-stars">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                <a href="http://luxuryhotel/hotel/stewart-hotel">
                                                    Stewart Hotel
                                                </a>
                                            </div>
                                            <div class="terms">
                                                <div class="g-attributes">
                                                    <span class="attr-title"><i class="icofont-medal"></i> Facilities: </span>
                                                    <span class="item wake-up-call term-42">Wake-up call</span>
                                                    <span class="item car-hire term-43">Car hire</span>
                                                    <span class="item bicycle-hire term-44">Bicycle hire</span>
                                                    <span class="item flat-tv term-45">Flat Tv</span>
                                                    <span class="item internet-wifi term-47">Internet – Wifi</span>
                                                    <span class="item coffee-and-tea term-48">Coffee and tea</span>
                                                </div>
                                            </div>
                                            <div class="location">
                                                <i class="icofont-paper-plane"></i>
                                                Los Angeles
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="item-loop-list ">
                                        <div class="thumb-image">
                                            <a href="http://luxuryhotel/hotel/crowne-plaza-hotel">
                                                <img class="img-responsive lazy loaded"
                                                     data-src="http://luxuryhotel/uploads/demo/space/space-11.jpg"
                                                     alt="Crowne Plaza Hotel"
                                                     src="http://luxuryhotel/uploads/demo/space/space-11.jpg"
                                                     data-was-processed="true">
                                            </a>

                                        </div>
                                        <div class="g-info">
                                            <div class="star-rate">
                                                <div class="list-star">
                                                    <ul class="booking-item-rating-stars">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                <a href="http://luxuryhotel/hotel/crowne-plaza-hotel">
                                                    Crowne Plaza Hotel
                                                </a>
                                            </div>
                                            <div class="terms">
                                                <div class="g-attributes">
                                                    <span class="attr-title"><i class="icofont-medal"></i> Facilities: </span>
                                                    <span class="item wake-up-call term-42">Wake-up call</span>
                                                    <span class="item car-hire term-43">Car hire</span>
                                                    <span class="item bicycle-hire term-44">Bicycle hire</span>
                                                    <span class="item flat-tv term-45">Flat Tv</span>
                                                    <span class="item laundry-and-dry-cleaning term-46">Laundry and dry cleaning</span>
                                                    <span class="item internet-wifi term-47">Internet – Wifi</span>
                                                    <span class="item coffee-and-tea term-48">Coffee and tea</span>
                                                </div>
                                            </div>
                                            <div class="location">
                                                <i class="icofont-paper-plane"></i>
                                                New York, United States
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="item-loop-list ">
                                        <div class="thumb-image">
                                            <a href="http://luxuryhotel/hotel/envision-hotel-biston">
                                                <img class="img-responsive lazy loaded"
                                                     data-src="http://luxuryhotel/uploads/demo/space/space-10.jpg"
                                                     alt="EnVision Hotel Boston"
                                                     src="http://luxuryhotel/uploads/demo/space/space-10.jpg"
                                                     data-was-processed="true">
                                            </a>

                                        </div>
                                        <div class="g-info">
                                            <div class="star-rate">
                                                <div class="list-star">
                                                    <ul class="booking-item-rating-stars">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                <a href="http://luxuryhotel/hotel/envision-hotel-biston">
                                                    EnVision Hotel Boston
                                                </a>
                                            </div>
                                            <div class="terms">
                                                <div class="g-attributes">
                                                    <span class="attr-title"><i class="icofont-medal"></i> Facilities: </span>
                                                    <span class="item wake-up-call term-42">Wake-up call</span>
                                                    <span class="item car-hire term-43">Car hire</span>
                                                    <span class="item flat-tv term-45">Flat Tv</span>
                                                    <span class="item laundry-and-dry-cleaning term-46">Laundry and dry cleaning</span>
                                                    <span class="item internet-wifi term-47">Internet – Wifi</span>
                                                    <span class="item coffee-and-tea term-48">Coffee and tea</span>
                                                </div>
                                            </div>
                                            <div class="location">
                                                <i class="icofont-paper-plane"></i>
                                                California
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="item-loop-list ">
                                        <div class="thumb-image">
                                            <a href="http://luxuryhotel/hotel/studio-allston-hotel">
                                                <img class="img-responsive lazy loaded"
                                                     data-src="http://luxuryhotel/uploads/demo/space/space-9.jpg"
                                                     alt="Studio Allston Hotel"
                                                     src="http://luxuryhotel/uploads/demo/space/space-9.jpg"
                                                     data-was-processed="true">
                                            </a>

                                        </div>
                                        <div class="g-info">
                                            <div class="star-rate">
                                                <div class="list-star">
                                                    <ul class="booking-item-rating-stars">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                <a href="http://luxuryhotel/hotel/studio-allston-hotel">
                                                    Studio Allston Hotel
                                                </a>
                                            </div>
                                            <div class="terms">
                                                <div class="g-attributes">
                                                    <span class="attr-title"><i class="icofont-medal"></i> Facilities: </span>
                                                    <span class="item car-hire term-43">Car hire</span>
                                                    <span class="item bicycle-hire term-44">Bicycle hire</span>
                                                    <span class="item flat-tv term-45">Flat Tv</span>
                                                    <span class="item laundry-and-dry-cleaning term-46">Laundry and dry cleaning</span>
                                                    <span class="item internet-wifi term-47">Internet – Wifi</span>
                                                    <span class="item coffee-and-tea term-48">Coffee and tea</span>
                                                </div>
                                            </div>
                                            <div class="location">
                                                <i class="icofont-paper-plane"></i>
                                                Los Angeles
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="item-loop-list ">
                                        <div class="thumb-image">
                                            <a href="http://luxuryhotel/hotel/redac-gateway-hotel">
                                                <img class="img-responsive lazy loaded"
                                                     data-src="http://luxuryhotel/uploads/demo/space/space-8.jpg"
                                                     alt="Redac Gateway Hotel"
                                                     src="http://luxuryhotel/uploads/demo/space/space-8.jpg"
                                                     data-was-processed="true">
                                            </a>

                                        </div>
                                        <div class="g-info">
                                            <div class="star-rate">
                                                <div class="list-star">
                                                    <ul class="booking-item-rating-stars">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                <a href="http://luxuryhotel/hotel/redac-gateway-hotel">
                                                    Redac Gateway Hotel
                                                </a>
                                            </div>
                                            <div class="terms">
                                                <div class="g-attributes">
                                                    <span class="attr-title"><i class="icofont-medal"></i> Facilities: </span>
                                                    <span class="item wake-up-call term-42">Wake-up call</span>
                                                    <span class="item car-hire term-43">Car hire</span>
                                                    <span class="item flat-tv term-45">Flat Tv</span>
                                                    <span class="item laundry-and-dry-cleaning term-46">Laundry and dry cleaning</span>
                                                    <span class="item internet-wifi term-47">Internet – Wifi</span>
                                                    <span class="item coffee-and-tea term-48">Coffee and tea</span>
                                                </div>
                                            </div>
                                            <div class="location">
                                                <i class="icofont-paper-plane"></i>
                                                Paris
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="item-loop-list ">
                                        <div class="thumb-image">
                                            <a href="http://luxuryhotel/hotel/castello-casole-hotel">
                                                <img class="img-responsive lazy loaded"
                                                     data-src="http://luxuryhotel/uploads/demo/space/space-7.jpg"
                                                     alt="Castello Casole Hotel"
                                                     src="http://luxuryhotel/uploads/demo/space/space-7.jpg"
                                                     data-was-processed="true">
                                            </a>

                                        </div>
                                        <div class="g-info">
                                            <div class="star-rate">
                                                <div class="list-star">
                                                    <ul class="booking-item-rating-stars">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                <a href="http://luxuryhotel/hotel/castello-casole-hotel">
                                                    Castello Casole Hotel
                                                </a>
                                            </div>
                                            <div class="terms">
                                                <div class="g-attributes">
                                                    <span class="attr-title"><i class="icofont-medal"></i> Facilities: </span>
                                                    <span class="item wake-up-call term-42">Wake-up call</span>
                                                    <span class="item bicycle-hire term-44">Bicycle hire</span>
                                                    <span class="item flat-tv term-45">Flat Tv</span>
                                                    <span class="item laundry-and-dry-cleaning term-46">Laundry and dry cleaning</span>
                                                    <span class="item coffee-and-tea term-48">Coffee and tea</span>
                                                </div>
                                            </div>
                                            <div class="location">
                                                <i class="icofont-paper-plane"></i>
                                                Paris
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bravo-pagination">
                            <nav class="mt-2">
                                <ul class="pagination">

                                    <li class="disabled page-item" aria-disabled="true" aria-label="« Previous">
                                        <span aria-hidden="true" class="page-link">‹</span>
                                    </li>


                                    <li class="active page-item " aria-current="page"><span class="page-link">1</span>
                                    </li>
                                    <li><a class="page-link" href="http://luxuryhotel/hotel?page=2">2</a></li>


                                    <li class="page-item">
                                        <a class="page-link" href="http://luxuryhotel/hotel?page=2" rel="next"
                                           aria-label="Next »">›</a>
                                    </li>
                                </ul>
                            </nav>

                            <span class="count-string">Showing 1 - 9 of 11 Hotels</span>
                        </div>
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
@endsection
@endsection

