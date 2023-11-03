@extends('layout')

@section('title')
  {{$title}}
@endsection

@section('content')
  <h1>Users Info</h1>   

  <p>User name: {{$name}}</p>
@endsection

<!-- <!DOCTYPE html>     
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>{{$title}}</title>
</head>
<body>
    <h1>Users Info</h1>   
    <p>User name: {{$name}}</p>
</body>
</html> -->