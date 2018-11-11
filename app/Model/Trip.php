<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Model\User;
use App\Model\Vendor;
use App\Model\Photo;

class trip extends Model
{
    protected $fillable = [
        'vendor_id', 'title', 'location', 'price', 'description', 'date', 'estimated_time', 'belonging', 'itinerary'
    ];

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }

    public function photos() {
        return $this->hasMany(Photo::class);
    }

    static function all_trips()
    {
        $trips = DB::table("trips")->get();
        return $trips;
    }

}
