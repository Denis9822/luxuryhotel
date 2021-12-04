<?php

namespace App\Http\Controllers;

use App\Helpers\Hotel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $rq)
    {

        $name = $rq->name;
        $type = "city";
        $date_start = $rq->start ?? Carbon::today()->format("m/d/Y");
        $date_end = $rq->end ?? Carbon::tomorrow()->format("m/d/Y");

        $room = $rq->room ?? 1;
        $adults = $rq->adults ?? 2;
        $children = $rq->children ?? 0;
        $order = $rq->order ?? \App\Helpers\Setting::getSettingByName('order');
        $date_end_format = Carbon::parse($date_end)->format("Y-m-d");
        $date_start_format = Carbon::parse($date_start)->format("Y-m-d");
        $date_end_format1 = Carbon::parse($date_end)->format("Y-m-d");
        $date_start_format1 = Carbon::parse($date_start)->format("Y-m-d");
        $page = $rq->page ?? 0;


        if ($rq->search_id) {
            $code = $rq->search_id;
            $type = $rq->search_type;
        }
        else {
            $code = Hotel::getCode(str_replace(" ", "%20", $name), $type)[0]['dest_id'] ?? null;
            $type = Hotel::getCode(str_replace(" ", "%20", $name), $type)[0]['dest_type'] ?? null;
        }
        if ($type == "hotel")
            $order = "distance";


//        dd(Hotel::getCode(str_replace(" ", "%20", $name), $type));
        $hotels = Hotel::getHotels($code,$room,$adults,$children,$date_start_format,$date_end_format,$page,$order,$type);
//        dd($hotels);

        if (!isset($hotels['count'])) {
            foreach (explode(' ',$name) as $word)
            {
                $type = "city";
                $code = Hotel::getCode(str_replace(" ", "%20", $word), $type)[0]['dest_id'] ?? null;
                $hotels = Hotel::getHotels($code,$room,$adults,$children,$date_start_format,$date_end_format,$page,$order,$type);

                if (!isset($hotels['count']))
                {
                    $countHotels = 0;
                    $rq->session()->flash('status', 'Not Found');
                    return view('hotel.index', compact('name', 'type', 'order', 'date_start', 'date_end','countHotels'))->with('status','Not Found');
                }
            }
        }
        else if ($type == "hotel")
        {
            if (!isset($hotels['result']))
            {
                $countHotels = 0;
                $rq->session()->flash('status', 'Not Found');
                return view('hotel.index', compact('name', 'type', 'order', 'date_start', 'date_end','countHotels'))->with('status','Not Found');
            }

            if ($hotels['result'][0]['hotel_name'] != $name)
            {
                $i = 1;
                do
                {

                    $date_end_format1 = Carbon::now()->addDays(56+$i)->format("Y-m-d");
                    $date_start_format1 = Carbon::now()->addDays(55+$i)->format("Y-m-d");
                    $hotels = Hotel::getHotels($code,$room,$adults,$children,$date_start_format1,$date_end_format1,$page,$order,$type);
                    $i++;
                }
                while ($hotels['result'][0]['hotel_name'] != $name || $i>20);
            }
        }
//        dd(Hotel::getExchangePrice('20','RUB'));
        $pagination = 0;
        $countHotels = $hotels['count'];
        $max_page = $countHotels/20;
        $max_page = (int)$max_page;

//        dd($hotels);
        return view('hotel.index',compact('max_page','name','date_start','date_end','room','adults','children','hotels','pagination','page','order','countHotels','code','type','date_end_format','date_start_format','order','date_end_format1','date_start_format1'));
    }

    public function search(Request $rq)
    {
        $name = urlencode($rq->data);
        $hotels = Hotel::getCode($name,null);
//        dd($hotels);
        return view('ajax.search',compact('hotels'));
    }
    public function paginate(Request $rq)
    {
        $code = $rq->dest_id;
        $type = $rq->dest_type;
        $page = $rq->last_page+1;
        $date_start_format = $rq->date_start;
        $date_end_format = $rq->date_end;
        $order = $rq->order;
        $room =1;
        $adults = 1;
        $children = 0;

        $hotels = Hotel::getHotels($code,$room,$adults,$children,$date_start_format,$date_end_format,$page,$order,$type);

        return view('ajax.hotel',compact('hotels','date_start_format','date_end_format'));

    }
}
