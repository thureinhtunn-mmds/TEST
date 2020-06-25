<div class="col-sm-8 offset-2">
    <h3>Create New Post </h3>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Enter post title" required autofocus>
        </div>
        <div class="form-group">
            <textarea name="body" cols="30" rows="5" autofocus class="form-control" placeholder="Enter Description" required>

            </textarea>
        </div>
        <div class="form-group">
            <input class="btn btn-sm btn-primary" type="submit" value="Submit">
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-warning">
                Cancel
            </a>
        </div>
    </form>
</div>
