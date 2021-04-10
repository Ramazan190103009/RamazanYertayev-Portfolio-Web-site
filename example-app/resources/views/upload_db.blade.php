<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Laravel Image Upload</title>
    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .imgPreview img {
            padding: 8px;
            max-width: 100px;
        } 
    </style>
</head>

<body>

    <div class="container mt-5">
        <h3 class="text-center mb-5">Image Upload in Laravel</h3>
        <form action="{{route('upload_db')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif           
            <div class="custom-file">
            <label class="label" for="images">Choose image</label>
                <input type="file" name="imageFile[]" class="form-control" id="images" multiple="multiple">
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Upload Images
            </button>
        </form>
    </div>
  
   
</body>
</html>