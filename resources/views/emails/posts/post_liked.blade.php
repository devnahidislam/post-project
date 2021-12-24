@component('mail::message')
# Your post was liked

{{ $liker->name }} liked your one of the post.

@component('mail::button', ['url' => route('posts.show', $post)])
View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
