<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HotaruMail extends Mailable
{
    use Queueable, SerializesModels;
    public $sample2;
    public $sample;
    private $imgName;
    private $imgMineType;
    private $imgData;

     public function __construct($sample,$sample1,$sample2,$sample3, $imgName, $imgMineType, $imgData)
        {
            $this->sample = $sample;
            $this->sample1 = $sample1;
            $this->sample2 = $sample2;
            $this->sample3 = $sample3;
            $this->imgName = $imgName;
            $this->imgMineType = $imgMineType;
            $this->imgData = $imgData;
        }

    public function build()
    {
      $arr = [$this->sample1,$this->sample2, $this->sample3];
        return $this
        ->from('meisis@applyex.com')
        ->view('hello73',compact('arr'))
        ->subject($this->sample)
        ->attachData(
                         $this->imgData,
                         $this->imgName,
                         [
                         'mime' => $this->imgMineType,
                         ]);
    }

}
