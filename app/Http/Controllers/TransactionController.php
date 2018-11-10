<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Trip;
use App\Model\User;
use App\Model\Transaction;

use App\Mail\OrderShipped;

use Carbon\Carbon;

use Mail;

class TransactionController extends Controller
{
    public function storeTransaction(Request $request, Trip $trip) {
        $user = User::find(1);
        $vendor = Vendor::find(1);

        $total_amount = $trip->price *  $request->quantity;

        Transaction::create([
            'vendor_id' => $vendor->id,
            'user_id' => $user->id,
            'trip_id' => $trip->id,
            'amount' => $trip->price,
            'quantity' => $request->quantity,
            'total_amount' => $total_amount,
            'transaction_date' => Carbon::now(),
        ]);

        Mail::to($user['email'])->send(OrderShipped($trip));

        return redirect()->back();
    }
}
