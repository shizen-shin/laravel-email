@if ( Session::has('sent'))
<div>
    <p>{{old('name')}}さん、{{ session('sent') }}</p>
</div>
@endif

<form action="{{ url('contact2') }}" method="POST">
@csrf

 <p>名前：<input type="text" name="name" value="{{old('name')}}"></p>

 <p>メールアドレス：<input type="text" name="email" value="{{old('email')}}"></p>

 <p>メッセージ：
     <textarea name="message">{{ old('message') }}</textarea></p>

 <input type="submit" value="送信する">
</form>