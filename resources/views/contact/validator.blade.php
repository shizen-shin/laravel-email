@if ( Session::has('sent'))
<div>
    <p>{{old('name')}}さん、{{ session('sent') }}</p>
</div>
@endif

<form action="{{ url('validator') }}" method="POST">
@csrf

 <p>名前：<input type="text" name="name" value="{{ old('name') }}" ></p>
  @error('name')
    <p style="color:red;">{{ $message }}</p>
  @enderror

 <input type="submit" value="送信する">
</form>