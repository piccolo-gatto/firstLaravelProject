@extends('layout')

@section('title', "Form")

@section('content')
<form method="post" action="/form">
    @csrf

<div>
      <label>Name</label>
      <input type="text" name="name" value="{{ old('name') }}">
      @error('name')
      <div>{{$message}}</div>
      @enderror
</div>
<br>
<div>
      <label>LastName</label>
      <input type="text" name="lastname" value="{{ old('lastname') }}">
      @error('lastname')
      <div>{{$message}}</div>
      @enderror
</div>
<br>
<div>
      <label>City</label>
      <select name="city">
        <option value="Irkutsk">Irkutsk</option>
        <option value="Angarsk">Angarsk</option>
        <option value="Bratsk">Bratsk</option>
    </select>
    @error('city')
      <div>{{$message}}</div>
      @enderror

</div>
<br>
<div>
      <label>Email</label>
      <input type="text" name="email" value="{{ old('email') }}">
      @error('email')
      <div>{{$message}}</div>
      @enderror
</div>
<br>
      <button type="submit" name="button">Отправить</button>
</form>

@endsection