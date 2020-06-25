<div class="col-sm-12 mt-2">
    <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary">Create</a>
    @foreach ($posts as $post)
    <div class="card my-2">
        <div class="card-header">
            <h3>
                <a href="{{ route('post.show',$post->id) }}" class="float-left">{{ $post->title }}</a>
            </h3>
            <span class="float-right">{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <div class="card-body">
            <p>
                {{ $post->body }}
            </p>
            <div class="d-flex flex-row float-right">
                <a href="{{ route('post.edit',$post->id) }}" class="btn btn-sm btn-warning mr-1">
                    Edit
                </a>
                <form action="{{ route('post.delete',$post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-sm btn-danger ml-1">
                </form>
            </div>
        </div>
    </div>
    @endforeach
    {{ $posts->links() }}
</div>
