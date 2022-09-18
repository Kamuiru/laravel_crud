<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class = "bg-gray-200">
    <nav class=" flex justify-between bg-blue-500 p-3 mb-5">
      @if(auth()->user())
      <h1 class='text-white flex items-center'>STUDENT DETAILS</h1>
      <form class="flex items-center p-3 text-white" action="{{route('logout')}}" method="post">
        @csrf
        <input type="submit" value="Logout">
      </form>
      @else
      <div class="flex items-center p-3 text-white">
        <a class="mr-2" href="{{route('login')}}">Login</a>
        <a class="mr-2" href="{{route('register')}}">Register</a>
        </div>
      @endif
    </nav>
    
  @auth
    <div >
    <form class="mt-3 ml-2 bg-white rounded lg w-3/12 flex justify-between p-1 flex items-center" action="/students" >
        
        <div><input class="!outline-none" type="text" placeholder="search..." name="search"></div>
        <div>
        <span>
            <button type="submit"> <a href="/search"><span class="material-symbols-sharp flex items-center">search
</span></a></button>
        </span>
    </div>
    </form>
</div>
@endauth


    @yield('content')
</body>
</html>