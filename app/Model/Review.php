<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Trip;
use App\Model\User;

class Review extends Model
{
    protected $fillable = [
        'trip_id', 'user_id', 'star', 'description'
    ];

    public function trip() {
        return $this->belongsTo(Trip::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
