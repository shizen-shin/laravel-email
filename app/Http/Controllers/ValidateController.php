<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;                   //追記
use App\Mail\ValidatedMail; //追記
use Illuminate\Support\Facades\Validator; //追記

class ValidateController extends Controller
{
    //以下追記
    public function index() //コンタクトフォームの表示
    {
        return view('contact.validate');
    }

    public function send(Request $request)  //メールの自動送信設定
    {
        // $validateData = $request->validate([
        //     'name' => 'required|string|max:10|min:3',
        // ]);

        // $data = $validateData;


        //バリデーションルール
        $rules = [
            'name' => 'required|min:3|max:10',
            'email' => 'required|email',
            'message' => 'required|max:1000',
        ];

        //カスタムエラーメッセージ
        $messages = [
            'name.required' => '名前を入力して下さい。',
            'name.max' => ':max 文字以下で入力して下さい。',
            // 'name.min' => ':min 文字以上で入力して下さい。',

            // 'email.required' => 'メールアドレスを入力して下さい。',
            // 'email.email' => '正しいメールアドレスを入力して下さい。',

            // 'message.required' => 'メッセージを入力して下さい。',
            // 'message.max' => 'メッセージは1000文字以下で入力して下さい。',
        ];

        //Validator
        $validator = Validator::make($request->all(), $rules, $messages)
                    ->validate();

        // if ($validator->fails()) {
        //     return redirect('validate')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        Mail::to('hlaupcpky38@gmail.com')
                ->send(new ValidatedMail($validator));

        return back()->withInput()
                     ->with('sent', '送信完了しました。');    //送信完了を表示
    }
}