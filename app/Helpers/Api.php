<?php


namespace App\Helpers;


class Api
{

    public static function getApiData($query)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $query,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 548e125e41msha7b92afeb469f59p10b083jsn9cddb03d3d6c"
            ],
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        $response=json_decode($response,true);
        curl_close($curl);

        return $response;
    }

}
