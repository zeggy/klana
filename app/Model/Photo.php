<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Trip;

class Photo extends Model
{
    protected $fillable = [
        'trip_id', 'path'
    ];

    public function trip() {
        return $this->belongsTo(Trip::class);
    }
}
