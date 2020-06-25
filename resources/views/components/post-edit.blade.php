<div class="col-sm-8 offset-2">
    <h3>Edit Post </h3>
    <form action="{{ route('post.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Enter post title" required autofocus value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <textarea name="body" cols="30" rows="5" autofocus class="form-control" placeholder="Enter Description" required>
                {{ $post->body }}
            </textarea>
        </div>
        <div class="form-group">
            <input class="btn btn-sm btn-primary" type="submit" value="Update">
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-warning">
                Cancel
            </a>
        </div>
    </form>
</div>
