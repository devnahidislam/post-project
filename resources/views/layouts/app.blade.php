<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
  <title>Post</title>
</head>
<body class="bg-gray-200">
  <nav class="p-2 bg-white flex justify-between mb-5">
    <ul class="flex items-center">
      <li>
        <a href="/" class="py-1 px-2 bg-blue-400 rounded-sm">Home</a>
        <a href="{{ route('dashboard') }}" class="py-1 px-2 bg-blue-400 rounded-sm">Dashboard</a>
        <a href="#" class="py-1 px-2 bg-blue-400 rounded-sm">Post</a>
      </li>
    </ul>

    <ul class="flex items-center">
      <li>
        <a href="#" class="py-1 px-2 bg-blue-400 rounded-sm">Nahid</a>
        <a href="#" class="py-1 px-2 bg-blue-400 rounded-sm">Login</a>
        <a href="{{ route('register') }}" class="py-1 px-2 bg-blue-400 rounded-sm">Register</a>
        <a href="#" class="py-1 px-2 bg-blue-400 rounded-sm">LogOut</a>
      </li>
    </ul>
  </nav>

  @yield('content')
</body>
</html>