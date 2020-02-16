<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable =['name','initials'];

    public function country()
    {
        return $this->belongsTo(Country::class);
        //return $this->belongsTo(Country::class,'country_id', 'id');
    }

    public function cities()
    {
        return $this->hasMany(City::class);
        //return $this->belongsTo(Country::class,'country_id', 'id');
    }

}
