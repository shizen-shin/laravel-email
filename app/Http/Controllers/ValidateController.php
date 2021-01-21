<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;                   //追記
use App\Mail\ContactReply; //追記

class MailableController extends Controller
{
    //以下追記
    public function index() //コンタクトフォームの表示
    {
        return view('contact.index');
    }

    public function send(Request $request)  //メールの自動送信設定
    {
        $data = $request->all();

        Mail::to('hlaupcpky38@gmail.com')
                ->send(new ContactReply($data));

        return back()->withInput()
                     ->with('sent', '送信完了しました。');    //送信完了を表示
    }
}
