@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">

        <form action="{{ route('posts') }}" method="post" class="mb-4">
            @csrf
            <div class="mb-2">
                <label for="body" class="sr-only"></label>
                <textarea name="body" id="body" cols="30" rows="3" class="bg-white border-2 w-full p-4 @error('body') border-red-500 @enderror" placeholder="Post text here..."></textarea>
                @error('body')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-6 py-1 rounded-lg font-medium">Post</button>
            </div>
        </form>

        @if($posts->count())
            @foreach($posts as $post)
                <x-post :post="$post" />
            @endforeach
            {{ $posts->links() }}
        @else
            No post Available
        @endif
    </div>
  </div>
@endsection
