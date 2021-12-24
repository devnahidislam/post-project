@props(['post'=>$post])

<div class="mb-4">
    <div class="flex justify-between">
        <div>
            <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a><span class="text-gray-600 text-sm ml-2">{{ $post->created_at->diffForHumans() }}</span>
        </div>
        @can('delete', $post)
            <form action="{{ route('posts.destroy', $post) }}" method="post" class="mr-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-white font-bold border-2 px-2 bg-red-500 rounded-full hover:bg-red-800">Delete Post</button>
            </form>
        @endcan
    </div>

    <p class="mb-1">{{ $post->body }}</p>

    <div class="flex items-center">
        @auth
        @if(!$post->likedBy(auth()->user()))
        <form action="{{ route('post.like', $post->id)}}" method="post" class="mr-2">
            @csrf
            <button type="submit" class="text-white font-bold border-2 px-1 pb-1 bg-blue-500 rounded-full hover:bg-blue-800">👍</button>
        </form>
        @else
        <form action="{{ route('post.like', $post->id)}}" method="post" class="mr-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-white font-bold border-2 px-1 pt-1 bg-blue-500 rounded-full hover:bg-red-500">👎</button>
        </form>
        @endif
        @endauth
        <p>@guest<span class="text-white font-bold border-1 px-1 pb-1 mr-3 bg-blue-500 rounded-full cursor-default">👍</span>@endguest{{ $post->likes->count() }}</p>
    </div>
</div>
