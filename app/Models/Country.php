<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\State;

class Country extends Model
{
    protected $fillable =['name','initials'];

    public function location()
    {
        return $this->hasOne(Location::class);
    }

    public function states()
    {
        return $this->hasOne(State::class);
       // return $this->hasOne(State::class, 'country_id', 'id');
    }
    public function cities()
    {
        return $this->hasManyThrough(City::class,State::class);
    }
}
