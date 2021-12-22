<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Post</title>
</head>

<body class="bg-gray-200">
    <nav class="p-2 bg-white flex justify-between mb-5">
        <ul class="flex items-center">
            <li>
                <a href="/" class="py-1 px-2 bg-blue-400 rounded-sm">Home</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="py-1 mx-2 px-2 bg-blue-400 rounded-sm">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class="py-1 px-2 bg-blue-400 rounded-sm">Post</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li>
                    <a href="#"
                        class="py-1 px-2 mr-4 bg-gray-300 text-pink-600 rounded-full font-medium">{{ auth()->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="py-1 px-2 mx-2 bg-blue-400 rounded-sm">Logout</button>
                    </form>
                </li>
            @endauth

            @guest
                <li>
                    <a href="{{ route('login') }}" class="py-1 px-2 bg-blue-400 rounded-sm">Login</a>
                </li>
                <li>
                <li>
                    <a href="{{ route('register') }}" class="py-1 px-2 mx-2 bg-blue-400 rounded-sm">Register</a>
                </li>
            @endguest
        </ul>
    </nav>

    @yield('content')
</body>

</html>
