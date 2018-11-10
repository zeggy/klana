<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Model\Vendor;
use App\Model\Photo;

class Trip extends Model
{
    protected $fillable = [
        'user_id', 'title', 'location', 'price', 'description', 'date', 'estimated_time'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }

    public function photos() {
        return $this->hasMany(Photo::class);
    }
}
