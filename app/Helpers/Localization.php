<?php


namespace App\Helpers;




use Illuminate\Http\Request;

class Localization
{
    public static $countries = array(
        "en-gb","en-us","de","nl","fr","es","es-ar","es-mx","ca","it","pt-pt","pt-br","no","fi","sv",
        "da","cs","hu","ro","ja","zh-cn","zh-tw","pl","el","ru","tr","bg","ar","ko","he","lv","uk","id",
        "ms","th","et","hr","lt","sk","sr","sl","vi","tl","is");

    public static function countryCode():string
    {
        $geoip = new \Victorybiz\GeoIPLocation\GeoIPLocation();
        $geoip->setIP('206.71.50.230');
        $countryCode = strtolower($geoip->getCountryCode());
        if($countryCode == "us" || "gb")
            $countryCode = 'en-'.$countryCode;
        if($countryCode == "ar" || "mx")
            $countryCode = 'es-'.$countryCode;
        if($countryCode == "pr" || "br")
            $countryCode = 'pt-'.$countryCode;
        if($countryCode == "cn" || "tw")
            $countryCode = 'zh-'.$countryCode;
        if($countryCode == "cn" || "tw")
            $countryCode = 'zh-'.$countryCode;
        if($countryCode == "ua")
            $countryCode = 'ru';

        if(!in_array($countryCode, self::$countries))
            $countryCode = "en-us";

        return $countryCode;
    }
}
