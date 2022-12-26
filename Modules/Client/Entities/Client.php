<?php

namespace Modules\Client\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
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
}
