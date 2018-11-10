<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Trip;

class Vendor extends Model
{
    protected $fillable = [
        'name', 'photo', 'rating', 'phone'
    ];

    public function trips() {
        return $this->hasMany(Trip::class);
    }
}
