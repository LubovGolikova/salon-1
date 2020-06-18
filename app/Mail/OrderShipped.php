<?php

namespace App\Mail;

use App\OrderLines;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    public $orderlines;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(OrderLines $orderLines)
    {
        $this->orderlines = $orderLines;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com')
        ->view('admin.emailAdmin');
    }
}
