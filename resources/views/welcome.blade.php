<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Send More One Million Email</title>
</head>
<body>
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="card bg-gray-200 p-3 w-50" style="background-color: #dbdbdb">
        @if($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <ul class="m-0">
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        <form method="POST" action="{{route('mail.send')}}">
            @csrf
            <div class="row m-1 mb-3">
                <label for="subject" class="form-label">Email Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" value="{{old('subject')}}"
                       placeholder="Email Subject">
            </div>
            <div class="row m-1 mb-3">
                <label for="body" class="form-label">Example textarea</label>
                <textarea class="form-control" id="body" rows="5" name="body"
                          placeholder="Email Body">{{old('body')}}</textarea>
            </div>
            <div class="row m-1">
                <button class="btn btn-success" type="submit">Send</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>
</html>
