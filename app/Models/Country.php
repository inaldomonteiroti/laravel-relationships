<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Country extends Model
{
    protected $fillable =['name'];

    public function location()
    {
        return $this->hasOne(Location::class);
    }
}
