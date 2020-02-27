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
        
        //$countries = Country::where('name','LIKE',"%{$keySearch}%")->get();

        $countries = Country::where('name','LIKE',"%{$keySearch}%")->with('states')->get();
       
        //dd($countries);

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

    public function OneToManyTwo()
    {
        $keySearch = 'a';
        
        //$countries = Country::where('name','LIKE',"%{$keySearch}%")->get();

        $countries = Country::where('name','LIKE',"%{$keySearch}%")->with('states')->get();
       
        //dd($countries);

        foreach($countries as $country)
        {
        echo "<b> {$country->name} </b>";

            
                $states = $country->states()->get();

                foreach($states as $state)
                {
                    echo "<hr> {$state->initials} - {$state->name}";

                    foreach($state->cities as $city)
                    { 
                        echo " {$city->name}, ";
                    }
                }
                echo '<hr>';
        }

    }

    public function OneToManyInsert()
    {
        $dataForm = [
            'name' => 'Bahia',
            'initials' => 'BA',
        ];        
        $country = Country::find(1);
        //$insertState = $country->states()->create($dataForm);
        $country->states()->create($dataForm);
       // var_dump($insertState);
    }
    public function OneToManyInsertTwo()
    {
        $dataForm = [
            'name' => 'Bahia',
            'initials' => 'BA',
            'country_id' => '1',
        ];        
       
        $insertState = State::create($dataForm);       
       
    }
    public function HasManyThrough()
    {
        $country = Country::find(1);
        $cities = $country->cities;

        foreach ($cities as $city){
            echo " {$city->name}, ";
        }
         echo "Total de cidades : {$cities->count()}";
 
       
    }

}
