<!DOCTYPE html>     
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>@section('title') Default title @show</title>
</head>
<body>
    
    @include('partials.header')

    @section('content')
    @show

</body>
</html>