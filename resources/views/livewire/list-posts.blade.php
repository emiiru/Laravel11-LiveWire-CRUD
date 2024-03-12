<div>
    <a class="btn btn-primary pull-right" href="{{ route('post.create') }}" >Create</a>
    <table class="table table-hover table-bordered mt-3">
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('post.show', $post->id) }}" >View</a>
                        <a class="btn btn-warning ml-2" href="{{ route('post.edit', $post->id) }}" >Edit</a>
                        <a class="btn btn-danger ml-2" href="{{ route('post.delete', $post->id) }}" wire:confirm="Are you sure you want to delete this post?" >Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
