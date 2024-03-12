<div>
    <h1>{{ $post->title }}</h1>
    <h1>{{ $post->slug }}</h1>
    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.index') }}">Back</a>
</div>
