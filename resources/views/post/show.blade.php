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
            @foreach ($post as $pos)
            <div class="bg-body-secondary p-5" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Post Information</h5>
                        </div>
                        <div class="modal-body">
                            <p><h6>Title :-</h6>{{$pos->Title}}</p>
                            
                            <p> <h6>Description :-</h6> {{$pos->Description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
            <div class="container mt-5">
                <div class="bg-body-secondary p-5" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Post Creator Information</h5>
                            </div>
                            <div class="modal-body">
                                <p></p><h6>Name :-</h6>{{$creator->Name}}<p></p>
                                <p></p><h6>Email :-</h6>{{$creator->Email}}<p></p>
                                <p></p><h6>Name :-</h6>{{$creator->Name}}<p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
