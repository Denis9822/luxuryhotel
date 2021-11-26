<?php


namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Currency
{
    public static function currencyCode()
    {
        if(Cookie::get('currency') == null) {
            $geoip = new \Victorybiz\GeoIPLocation\GeoIPLocation();
            $geoip->setIP('206.71.50.230');
            $currencyCode = $geoip->getCurrencyCode();
        }
        else
        {
            $currencyCode = \App\Models\Currency::where('shortcut',Cookie::get('currency'))->first()->shortcut;
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
