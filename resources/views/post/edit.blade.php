<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous"
        />
        <title>Post Information</title>
    </head>

    <body>
        <x-header />
        <div class="container mt-5">
            <form action="{{ route('Post.update',$post->Id) }}" method="post">
                @method("PUT")
                @csrf
                <div class="mb-3">
                    <label for="Title" class="form-label"
                        >Title</label
                    >
                    <input
                        value="{{$post->Title}}"
                        type="text"
                        class="form-control"
                        name="Title"
                        id="Title"
                    />
                </div>
                @error('Title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="mb-3">
                    <label for="Posted_By" class="form-label"
                        >Posted_By</label
                    >
                    <select name="Posted_By" id="Posted_By" class="form-control">
                    @foreach($creators as $creator)
                        <option>{{$creator->Name}}</option>
                    @endforeach
                    </select>
                </div>
                @error('Posted_By')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="mb-3">
                    <label for="Email" class="form-label"
                        >Email</label
                    >
                    <input
                        value="{{$post->Email}}"
                        type="email"
                        class="form-control"
                        name="Email"
                        id="Email"
                    />
                </div>
                @error('Email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="mb-3">
                    <label for="Description" class="form-label"
                        >Description</label
                    >
                    <input
                        value="{{$post->Description}}"
                        type="text"
                        class="form-control"
                        name="Description"
                        id="Description"
                    />
                </div>
                @error('Description')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <button type="submit" class="btn btn-primary">Edit Post</button>
            </form>
        </div>
    </body>
</html>
