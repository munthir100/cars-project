<?php

namespace Modules\Client\Entities;

use App\Models\User;
use Modules\Client\Entities\Car;
use Illuminate\Database\Eloquent\Model;
use Modules\Dashboard\Entities\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'car_id',
    ];
    function user()
    {
        return $this->belongsTo(User::class);
    }
    function car()
    {
        return $this->belongsTo(Car::class);
    }
    function location()
    {
        return $this->hasOne(Location::class);
    }
    //https://github.com/willvincent/laravel-rateable
}
