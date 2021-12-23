@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="mb-4">
          <lavel for="name" class="sr-only">Name</lavel>
          <input type="text" name="name" id="name" placeholder="Name" class="bg-gray-100 border-2 p-2 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}" >

          @error('name')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

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
          <lavel for="username" class="sr-only">Username</lavel>
          <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 p-2 w-full rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}" >

          @error('username')
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
          <lavel for="password" class="sr-only">Password Again</lavel>
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="bg-gray-100 border-2 p-2 w-full rounded-lg @error('password') border-red-500 @enderror" value="" >
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 w-full rounded font-medium">Register</button>
      </form>
      <div class="flex justify-center mt-5">
        <span class="font-medium">Already a member?</span>
        <a href="{{ route('login') }}" class="text-blue-800 ml-2 font-medium">Login</a>
      </div>
    </div>
  </div>
@endsection
