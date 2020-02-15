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

    public function OneToOneInverse()
    {
        $latitude = 123;
        $longitude = 321;

        $location = Location::where('latitude',$latitude)
        ->where('longitude', $longitude)
        ->get()
        ->first();

        echo $location->id;
        $country = $location->country;
        echo $country->name;
    }

    public function OneToOneInsert()
    {
        $dataForm = [
            'name' => 'Argentina',
            'latitude' => '78',
            'longitude'=> '87',
        ];

        $country = Country::create($dataForm);

        // $dataForm['country_id'] = $country->id;
        // $location = Country::create($dataForm);


        // $location = new Location;
        // $location->latitude = $dataForm['latitude'];
        // $location->longitude = $dataForm['longitude'];
        // $location->country_id = $country->id;
        // $saveLocation = $location->save();

        $location = $country->location()->create($dataForm);
        //var_dump($location);


    }

}
