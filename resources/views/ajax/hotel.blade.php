@foreach($hotels['result'] as $hotel)
    <div class="col-lg-12 col-md-12 cursor-pointer" onclick="window.open('{{$hotel['url']}}?aid={{\App\Helpers\Setting::getSettingByName('referral')}}&selected_currency={{\App\Helpers\Currency::currencyCode()}}&checkin={{$date_start_format}}&checkout={{$date_end_format}}','_blank')">
        <div class="item-loop-list">
            <div class="thumb-image">
                <img class="img-responsive lazy loaded"
                     data-src="http://luxuryhotel/uploads/demo/space/space-2.jpg"
                     alt=" {{$hotel['hotel_name']}}"
                     src="{{$hotel['max_1440_photo_url']}}"
                     data-was-processed="true">

            </div>
            <div class="g-info">
                <div class="alig d-flex align-center justify-content-between">
                    <div class="item- mt-1 pr-3">
                        <h5>{{$hotel['hotel_name']}}</h5>
                    </div>
                    <div class="star-rate pc">
                        <div class="list-star">
                            <ul class="booking-item-rating-stars">
                                                                    <span class="attr-title">
                                                                    @if ($hotel['review_score'] != null)
                                                                            <span class="item"> {{$hotel['review_score']}} ({{$hotel['review_score_word']}})</span>
                                                                        @else
                                                                            <span class="item"> {{__('translation.Not scored')}}</span>
                                                                        @endif
                                                                    </span>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-flex b_bottom mob b-2 jus-c">
                    <div class="star-rate">
                        <div class="list-star">
                            <ul class="booking-item-rating-stars">
                                @for($i=0; $i < $hotel['class'];$i++)
                                    <li><i class="fa fa-star"></i></li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                    <div class="star-rate posc ml-2">
                        <div class="list-star">
                            <ul class="booking-item-rating-stars">
                                                                    <span class="attr-title">
                                                                    @if ($hotel['review_score'] != null)
                                                                            <span class="item"> {{$hotel['review_score']}} ({{$hotel['review_score_word']}})</span>
                                                                        @else
                                                                            <span class="item"> {{__('translation.Not scored')}}</span>
                                                                        @endif
                                                                    </span>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="star-rate pc">
                    <div class="list-star">
                        <ul class="booking-item-rating-stars">
                            @for($i=0; $i < $hotel['class'];$i++)
                                <li><i class="fa fa-star"></i></li>
                            @endfor
                        </ul>
                    </div>
                </div>
                <div class="location">
                    {{$hotel['default_wishlist_name']}}, {{$hotel['country_trans']}} ({{$hotel['address']}})
                </div>

                <div class="price mt-3 pc">
                    <div class="g-attributes">
                        @php
                            if(isset($hotel['composite_price_breakdown']['gross_amount_per_night']))
                              $price = $hotel['composite_price_breakdown']['gross_amount_per_night']['value'];
                          else if ($hotel['price_breakdown']['gross_price'])
                              $price = $hotel['price_breakdown']['gross_price'];
                          else
                              $price = $hotel['min_total_price'];
                        @endphp
                        <span class="item cssa"> <span>{{__('translation.price per day:')}}</span> <h5 >{{Currency::currencyCode()}} {{number_format(Hotel::getExchangePrice($price,$hotel['price_breakdown']['currency']))}}</h5></span>
                    </div>
                </div>
                <div class="d-flex b_bottom">
                    <div class="text_block">
                        @if(isset($hotel['urgency_message']))
                            <span class="red">{{$hotel['urgency_message']}}</span>
                        @endif
                        @if(isset($hotel['is_free_cancellable']))
                            @if($hotel['is_free_cancellable'] == 1)
                                <span class="green">{{__('translation.FREE Cancellation.')}}</span>
                            @endif
                        @endif
                        @if(isset($hotel['is_no_prepayment_block']))
                            @if($hotel['is_no_prepayment_block'] == 1)
                                <span class="green">{{__('translation.NO PREPAYMENT. Pay at property.')}}</span>
                            @endif
                        @endif
                    </div>
                    <div class="btn_block pc">
                        <button type="button" class="btn btn-primary btn-lg">{{__('translation.Watch')}}</button>
                    </div>
                </div>
                <div class="d-flex b_bottom mob last_b">
                    <div class="g-attributes pri">
                        @php
                            if(isset($hotel['composite_price_breakdown']['gross_amount_per_night']))
                                $price = $hotel['composite_price_breakdown']['gross_amount_per_night']['value'];
                            else if ($hotel['price_breakdown']['gross_price'])
                                $price = $hotel['price_breakdown']['gross_price'];
                            else
                                $price = $hotel['min_total_price'];
                        @endphp
                        <span class="item"> <span>{{__('translation.price per day:')}}</span> <h5 >{{Currency::currencyCode()}} {{number_format(Hotel::getExchangePrice($price,$hotel['price_breakdown']['currency']))}}</h5></span>
                    </div>

                    <div class="btn_block">
                        <button type="button" class="btn btn-primary btn-sm">{{__('translation.Watch')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach
