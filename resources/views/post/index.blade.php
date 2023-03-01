<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>All Posts</title>
</head>

<body>
    <div class="container mt-5">
        <div class="text-center">
            {{-- <form action="{{ route('Post.create') }}" method="get">
                <button type="submit" class="btn btn-success">
                    Create Post
                </button>
            </form> --}}
        </div>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Posted By</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->getUserName->name }}</td>
                        <td>{{ $post->created_at }}</td>
                        {{-- <td class="d-flex">
                            <a href="{{ route('Post.show', $post->Id) }}" class="btn btn-secondary me-1">
                                View
                            </a>
                            <form action="{{ route('Post.edit', $post->Id) }}" method="get">
                                <button type="submit" class="btn btn-primary me-1">
                                    Edit
                                </button>
                            </form>
                            <form action="{{ route('Post.destroy', $post->Id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this post?')"> Destroy
                                </button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
</body>

</html>
