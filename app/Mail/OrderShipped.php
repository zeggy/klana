<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Model\Trip;
use App\Model\User;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    protected $transaction;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orders.order_shipped')
                    ->with([
                        'transaction' => $this->transaction
                    ]);
    }
}
