<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requestor</title>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <link rel="stylesheet" href="{{asset('nav.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/livewire@2.6.2/dist/livewire.js"></script>
    @livewireStyles
</head>
<body>
<nav >
    <img src="{{asset('images/logo22.png')}}" class="img" alt="" srcset="">
    <a href="{{route('requestor')}}" class="nav-item active">Illinois Name Check</a>
    <a href="#" class="nav-item">Code Verifier</a>
    </nav>
    @livewire('multi-step-form')
    @livewireScripts
</body>
</html>