<?php

namespace App\Models;

use App\Helpers\Api;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Inspiration extends Model
{
    use HasFactory;
    protected $table = "inspirations";

    public function getApiObject()
    {
        $name = str_replace(" ", "%20", $this->name);
        $query = "https://booking-com.p.rapidapi.com/v1/hotels/locations?locale=en-gb&name=$name";

        $response = Api::getApiData($query);

        foreach ($response as $location)
        {
            if ($location["dest_type"] == "city" && $location["name"] == $this->name)
            {
                return $location;
            }
        }
        return $response;
    }
}
