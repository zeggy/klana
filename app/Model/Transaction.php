<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\User;
use App\Model\Vendor;
use App\Model\Trip;

class Transaction extends Model
{
    protected $fillable = [
        'user_id', 'vendor_id', 'trip_id', 'amount', 'transaction_date', 'quantity', 'total_amount'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }

    public function trip() {
        return $this->belongsTo(Trip::class);
    }
}
