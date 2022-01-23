<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
  public function rules()
  {
    return [

       'name'      => ['required', 'max:20'],
        'code'   => ['required', 'max:8'],
        'code2'   => ['required', 'same:code'],
       'email'     => ['required', 'email:rfc'],
       'password'   => ['required', 'max:10'],
       'password2'   => ['required', 'same:password'],

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
                'code'   => 'Code',
            'code2'   => 'Code2',
               'email'     => 'emil',
                 'password'   => 'パスワード',
              'password2'   => 'パスワード2',
           ];
       }

}
