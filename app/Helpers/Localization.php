<?php


namespace App\Helpers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Localization
{
    public static $countries = array(
        "en-gb","en-us","de","nl","fr","es","es-ar","es-mx","ca","it","pt-pt","pt-br","no","fi","sv",
        "da","cs","hu","ro","ja","zh-cn","zh-tw","pl","el","ru","tr","bg","ar","ko","he","lv","uk","id",
        "ms","th","et","hr","lt","sk","sr","sl","vi","tl","is");

    public static function countryCode()
    {
        if(Cookie::get('localization') == null) {
            $geoip = new \Victorybiz\GeoIPLocation\GeoIPLocation();
            $geoip->setIP('94.124.163.50');
            $countryCode = strtolower($geoip->getCountryCode());

            if ($countryCode == "us" || $countryCode == "gb")
                $countryCode = 'en-' . $countryCode;
            elseif ($countryCode == "ar" || $countryCode == "mx")
                $countryCode = 'es-' . $countryCode;
            elseif ($countryCode == "pr" || $countryCode == "br")
                $countryCode = 'pt-' . $countryCode;
            elseif ($countryCode == "cn" || $countryCode == "tw")
                $countryCode = 'zh-' . $countryCode;
            elseif ($countryCode == "cn" || $countryCode == "tw")
                $countryCode = 'zh-' . $countryCode;
            elseif ($countryCode == "ua")
                $countryCode = 'ru';


            if (!in_array($countryCode, self::$countries))
                $countryCode = "en-us";

            $countryData = \App\Models\Localization::where('shortcut',$countryCode)->first();
        }
        else
        {
            $countryData = \App\Models\Localization::where('shortcut',Cookie::get('localization'))->first();
        }
        return $countryData;
    }

    public static function getCountries()
    {
        $data = self::countryCode();

       $data = \App\Models\Localization::where('shortcut','<>',$data->shortcut)->get();
       return $data;
    }
}
