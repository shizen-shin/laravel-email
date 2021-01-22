<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;                   //追記
use App\Mail\ValidatedMail; //追記
use App\Http\Requests\MailFormRequest;  //追記（フォームリクエスト）

class ValidatorController extends Controller
{
    //以下追記
    public function index() //コンタクトフォームの表示
    {
        return view('contact.validator');
    }

    public function send(MailFormRequest $validatedRequest)  //メールの自動送信設定
    {
        $data = $validatedRequest;

        Mail::to('hlaupcpky38@gmail.com')
                ->send(new ValidatedMail($data));

        return back()->withInput()
                     ->with('sent', '送信完了しました。');    //送信完了を表示
    }
}