@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{ route('posts') }}" method="post" class="mb-4">
            @csrf
            <div class="mb-2">
                <label for="body" class="sr-only"></label>
                <textarea name="body" id="body" cols="30" rows="2" class="bg-gray-100 border-2 w-full p-4 @error('body') border-red-500 @enderror" placeholder="Post text here..."></textarea>
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
                <div class="mb-4">
                    <a href="#" class="font-bold">{{ $post->user->name }}</a><span class="text-gray-600 text-sm ml-2">{{ $post->created_at->diffForHumans() }}</span>
                    <p class="mb-1">{{ $post->body }}</p>
                    <div class="flex items-center">
                        @if(!$post->likedBy(auth()->user()))
                        <form action="{{ route('post.like', $post->id)}}" method="post" class="mr-2">
                            @csrf
                            <button type="submit" class="text-white font-bold border-2 px-1 pb-1 bg-blue-500 rounded-full">👍</button>
                        </form>
                        @else
                        <form action="{{ route('post.like', $post->id)}}" method="post" class="mr-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white font-bold border-2 px-1 pt-1 bg-blue-500 rounded-full">👎</button>
                        </form>
                        @endif
                        {{ $post->likes->count() }}
                    </div>
                </div>
            @endforeach
            {{ $posts->links() }}
        @else
            No post Abailable
        @endif
    </div>
  </div>
@endsection
