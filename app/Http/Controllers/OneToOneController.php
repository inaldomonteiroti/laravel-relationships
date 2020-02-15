<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\Location;

use Illuminate\Http\Request;

class OneToOneController extends Controller
 {
//     public function OneToOne()

//     {
//         $country = Country::find(1);

//         echo $country->name;

//         $location = $country->location;

//         echo "<hr>Latitude: {$location->latitude}<br>";
//         echo "Longitude: {$location->longitude}<br>";

//     }
    public function OneToOne()

    {
        $country = Country::where('name', 'Brasil')->get()->first();

        echo $country->name;

        //se chamar so o get retorna o array ...por isso o first obs: pode ser feito um where
        $location = $country->location()->get()->first();

        echo "<hr>Latitude: {$location->latitude}<br>";
        echo "Longitude: {$location->longitude}<br>";

    }
}
