@foreach($hotels as $hotel)
    <div class="search_item" search-id="{{$hotel['dest_id']}}" search-type="{{$hotel['dest_type']}}" search-name="{{$hotel['name']}}">
        {{$hotel['name']}} ({{$hotel['dest_type']}}) - {{$hotel['country']}}
    </div>

    @if($loop->index > 5)
        @break
    @endif
@endforeach
