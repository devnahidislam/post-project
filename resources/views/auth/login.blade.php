@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 mt-10 rounded-lg">

      @if(session('status'))
      <div class="bg-red-500 mb-6 rounded-lg text-white text-center">
        {{ session('status') }}
      </div>
      @endif

      <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="mb-4">
          <lavel for="email" class="sr-only">Email</lavel>
          <input type="text" name="email" id="email" placeholder="Email" class="bg-gray-100 border-2 p-2 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}" >

          @error('email')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-4">
          <lavel for="password" class="sr-only">Password</lavel>
          <input type="password" name="password" id="password" placeholder="Choose a Password" class="bg-gray-100 border-2 p-2 w-full rounded-lg @error('password') border-red-500 @enderror" value="" >

          @error('password')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-4">
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label>Remember Me</label>
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2 w-full rounded font-medium">Login</button>
      </form>
    </div>
  </div>
@endsection
