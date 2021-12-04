<?php


namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use \Torann\GeoIP\Facades\GeoIP;

class Currency
{
    public static function currencyCode()
    {
        if(Cookie::get('currency') == null) {
            $geoData = geoip(request()->ip());
            $currencyCode = $geoData['currency'];
        }
        else
        {
            $currencyCode = \App\Models\Currency::where('shortcut',Cookie::get('currency'))->first()->shortcut ?? Cookie::get('currency');
        }
        return $currencyCode;
    }
    public static function getCurrencies($type = null)
    {
        if ($type != null)
            $currencies = \App\Models\Currency::where('shortcut','<>',self::currencyCode())->where('type',$type)->get();
        else
          $currencies = \App\Models\Currency::where('shortcut','<>',self::currencyCode())->get();
        return $currencies;
    }

}
