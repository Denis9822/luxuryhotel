<?php


namespace App\Helpers;

use App\Helpers\Currency;
use Carbon\Carbon;

class Hotel
{
    public static function getHotels($city, $room = 1, $adults =2,$children = 0,$date_start = null, $date_end = null, $page = 0,$order,$type)
    {
        $date_start = ($date_start == null) ? Carbon::today()->addDays(50)->format('Y-m-d') : $date_start;
        $order = ($order == null) ? "popularity" : $order;
        $type = ($type == null) ? "city" : $type;
        $date_end = ($date_end == null) ? Carbon::tomorrow()->addDays(50)->format('Y-m-d') : $date_end;
        $currency = Currency::currencyCode();
        $lang = Localization::countryCode()->shortcut;
        if($children != 0)
            $string = "https://booking-com.p.rapidapi.com/v1/hotels/search?units=metric&order_by=$order&checkout_date=$date_end&adults_number=$adults&checkin_date=$date_start&room_number=$room&filter_by_currency=$currency&dest_type=$type&locale=$lang&dest_id=$city&include_adjacency=true&page_number=$page&children_number=$children&children_ages=5%2C0";
        else
            $string = "https://booking-com.p.rapidapi.com/v1/hotels/search?units=metric&order_by=$order&checkout_date=$date_end&adults_number=$adults&checkin_date=$date_start&room_number=$room&filter_by_currency=$currency&dest_type=$type&locale=$lang&dest_id=$city&include_adjacency=true&page_number=$page";

        return Api::getApiData($string);
    }

    public static function getExchangePrice($price,$currency)
    {
        if(Currency::currencyCode() == $currency)
            return (int) $price;

//         return \AmrShawky\LaravelCurrency\Facade\Currency::convert()->from('USD')->to('RUB')->amount($price)->get();

        $query = "https://booking-com.p.rapidapi.com/v1/metadata/exchange-rates?currency=$currency&locale=en-gb";

        $response = Api::getApiData($query);

        $response2 = null;
        if(isset($response['exchange_rates'])) {
            foreach ($response['exchange_rates'] as $response) {
                if ($response['currency'] == Currency::currencyCode())
                    $response2 = $price * $response['exchange_rate_buy'];
            }
            return (int)$response2;
        }
        else
        {
            return 0;
        }
    }

    public static function getCode($name)
    {
        $loc = Localization::countryCode()->shortcut;
//        dd("https://booking-com.p.rapidapi.com/v1/hotels/locations?locale=$loc&name=$name");
        $datas = Api::getApiData("https://booking-com.p.rapidapi.com/v1/hotels/locations?locale=$loc&name=$name");;
        if($datas != null) {
            return $datas;
        }
        else
        {
            return 'not fount';
        }
    }

    public static function pagination($hotels,$page,$limit)
    {
        if (!$hotels)
            $hotels = 0;
        if (!$limit)
            $limit = 20;

        $page = (int) $page +1;
        $lastPage = $hotels / $limit;


        $lastPage = (int) $lastPage;
        $lastPage1 = $hotels % $limit;
        $countWatch = 3;
        $arrayIndex = [];
        array_push($arrayIndex,1);

        if ($page-1 > $lastPage)
        {
            array_push($arrayIndex,$page);
            return $arrayIndex;
        }

        if ($lastPage1 > 0 && $hotels > 20)
            $lastPage++;
        else
        {
          return $arrayIndex;
        }
        for ($i = $page; $i < $page+$countWatch; $i++)
        {
            if ($i>= $lastPage)
                break;
            if ($i == 1)
                continue;
            array_push($arrayIndex,$i);
        }

        for ($i = $page-1; $i > $page-$countWatch; $i--)
        {
            if ($i<= 1)
                continue;
            array_push($arrayIndex,$i);
        }
        array_push($arrayIndex,$lastPage);
        asort($arrayIndex);
       return $arrayIndex;

    }

    public static function addParameterToUrl($request, $optionName, $optionData, $optionLastData)
    {
        $str = $optionName.'='.$optionLastData;
        $str2 = $optionName.'='.$optionData;
        if (strpos($request,$str) == null)
            $request .= '&'.$str2;
        else
        {
            $request = str_replace($str,$str2,$request);
        }

        return $request;
    }

}

