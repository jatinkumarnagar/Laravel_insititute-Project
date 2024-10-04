<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS Link -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap CSS URL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Admin Panel</title>
</head>

<body>
    <!--Top Head Article Admin Panel Starts-->
    <div class="custom-bg py-2 text-center mb-2 sticky-top">
        <h1 class="text-white">Article Admin Panel</h1>
    </div>
    <!--Top Head Article Admin Panel Ends-->
    <div class="container-fluid">
        <!--Back Button Starts-->
        <div class="d-flex justify-content-end">
            <button class="btn btn-danger border-0 px-3 py-1 rounded">
                <a href="{{ route('Articles') }}" class=" text-white text-decoration-none">
                    Back
                </a>
            </button>
        </div>
        <!--Back Button Ends-->
        <div class="article-form d-flex justify-content-center">
            <!--Article Card Form Starts-->
            <div class="card border-0 shadow-lg my-4 px-0 w-75">
                <div class="card-header" style="background-color: #066aab;">
                    <h3 class="text-white text-center">Add New Article</h3>
                </div>
                <form enctype="multipart/form-data" action="{{ route('admin.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label h5">Title</label>
                            <input type="text" value="{{ old('title') }}" name="title" id=""class="@error('title') is-invalid @enderror form-control form-control-lg shadow-none" placeholder="Title">
                            @error('title')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Staff Name</label>
                            <input type="text" value="{{ old('staff') }}" name="staff" id="" class="@error('staff') is-invalid @enderror form-control form-control-lg shadow-none" placeholder="Staff Name">
                            @error('staff')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror 
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Academy Name</label>
                            <input type="text" value="{{ old('academy') }}" name="academy" id="" class="@error('academy') is-invalid @enderror form-control form-control-lg shadow-none" placeholder="Academy Name">
                            @error('academy')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Description</label>
                            <textarea name="description" id="" class="@error('description') is-invalid @enderror form-control form-control-lg shadow-none" cols="30" rows="5" placeholder="Enter Description...">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Image</label>
                            <input type="file" name="image" id="" class="form-control form-control-lg shadow-none" placeholder="Image">
                        </div>
                        <!--Button-->
                        <div class="d-grid">
                            <button class="btn btn-lg btn-primary border-0" style="background-color: #f4a024;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--Article Card Form Ends-->
        </div>
    </div>

</body>

</html>
