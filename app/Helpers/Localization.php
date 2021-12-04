<?php


namespace App\Helpers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class Localization
{

    public static function countryCode()
    {
        if(Cookie::get('localization') == null) {
            $geoData = geoip(request()->ip());
            $countryCode = strtolower($geoData['iso_code']);
            if ($countryCode == "us" || $countryCode == "gb")
                $countryCode = 'en-gb';
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
            $cotsd = [];
            foreach (\App\Models\Localization::where('active',1)->get('shortcut')->toArray() as $val)
            {
                $cotsd[] = $val['shortcut'];
            }

            if (!in_array($countryCode, $cotsd))
                $countryCode = "en-gb";

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

       $data = \App\Models\Localization::where('shortcut','<>',$data->shortcut)->where('active',1)->get();
       return $data;
    }
}
