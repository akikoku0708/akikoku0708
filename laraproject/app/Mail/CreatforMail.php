<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreatforMail extends Mailable
{
  use Queueable, SerializesModels;
  use Queueable, SerializesModels;
    protected $contact;
    protected $contact2;
    public function __construct($contact1,$contact2,$contact3)
    {
      // 引数で受け取ったデータを変数にセット
      $this->contact1 = $contact1;
      $this->contact2 = $contact2;
      $this->contact3 = $contact3;


    }
    public function build()
    {

        $arr = [$this->contact1, $this->contact2,$this->contact3];

        return $this
          ->from('meisis@applyex.com') // 送信元
          ->subject('ご連絡')
          ->view('members.login.sforget3',compact('arr'))
          ->with(['contact' => $this->contact1],['contact2' => $this->contact2]); // withオプションでセットしたデータをテンプレートへ受け渡す

    }
}
