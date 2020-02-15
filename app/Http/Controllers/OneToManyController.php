<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\State;

use Illuminate\Http\Request;

class OneToManyController extends Controller
{
    // public function OneToMany()
    // {
    //     $country = Country::where('name','Brasil')->get()->first();
    //     echo $country->name;

    //     $states = $country->states()->get();

    //     foreach($states as $state)
    //     {
    //         echo "<hr> {$state->initials} - {$state->name}";
    //     }
    // }

    public function OneToMany()
    {
        $keySearch = 'a';
        
        $countries = Country::where('name','LIKE',"%{$keySearch}%")->get();
       
        foreach($countries as $country)
        {
        echo "<b> {$country->name} </b>";

            
                $states = $country->states()->get();

                foreach($states as $state)
                {
                    echo "<hr> {$state->initials} - {$state->name}";
                }
                echo '<hr>';
        }

    }

    public function ManyToOne()
    {
        $stateName = 'São Paulo';
        $state = State::where('name',$stateName)->get()->first();
        echo "<b>{$state->name}</b>";

        $country = $state->country;
        echo "<br>País: {$country->name}";

    }

}
