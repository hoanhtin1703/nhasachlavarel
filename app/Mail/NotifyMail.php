<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;

public $detail;
    /**
     * Create a new message instance.
     *
     *
     * @return void
     */
    public function __construct($detail)
    {
    $this->detail = $detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
    $this->subject('Câu Hỏi Từ Khách Hàng')
    ->view('mail')
    ->from('bestielibraryshop@gmail.com','BETIES LIBRARY SHOP');
}
}
