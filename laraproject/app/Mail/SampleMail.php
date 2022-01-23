<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SampleMail extends Mailable
{
    use Queueable, SerializesModels;

       public $sample;
       private $imgName;
       private $imgMineType;
       private $imgData;

       public function __construct($sample, $imgName, $imgMineType, $imgData)
          {
              $this->sample = '9999999999';
              //$this->sample = $sample;
              $this->imgName = $imgName;
              $this->imgMineType = $imgMineType;
              $this->imgData = $imgData;
          }

          public function build()
          {
              return $this->view('hello5')
                           ->text('hello6')
                           ->subject('222メール送信テスト222')
                           ->attachData(
                               $this->imgData,
                               $this->imgName,
                               [
                               'mime' => $this->imgMineType,
                               ]);
          }



}
