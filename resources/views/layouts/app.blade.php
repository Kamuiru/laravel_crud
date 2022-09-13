<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    @yield('content')
</body>
</html>