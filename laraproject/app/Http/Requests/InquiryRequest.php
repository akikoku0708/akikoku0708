<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiryRequest extends FormRequest
{

    public function rules()
    {
      return [
         'name'      => ['required', 'max:20'],
         'email'     => ['required', 'email:rfc'],
         'message'   => ['required', 'max:1024'],
     ];
    }
    public function messages()
       {
           return [
               'required'  => ':attributeは必須です。',
               'max'       => ':attributeは最大:max文字で入力してください。',
               'rfc'       => '正しいメールアドレスを入力してください。',
           ];
       }

       public function attributes()
         {
             return [
                 'name'      => 'お名前',
                 'email'     => 'emil',
                 'message'   => 'メッセージ',
             ];
         }

}
