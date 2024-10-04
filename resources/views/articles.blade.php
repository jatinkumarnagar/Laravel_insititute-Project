<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Video Editing Institute in Rohini Video Editing Course</title>

    <!-- Fonts -->

    <!-- Styles -->

</head>

<body class="antialiased">
    @extends('layouts.navbar')
    @section('nav')
        <!--About Main Body Starts-->
        <div class="container my-5">
            @if (Session::has('success'))
                <div class="d-flex justify-content-end">
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            <div class="row">
                <!--Testimonials Main Content Start-->
                <div class="col-lg-9 main-bd">
                    <div class="d-flex justify-content-end">
                        <button class="add-btn custom-bg border-0 px-3 py-1 rounded">
                            <a href="{{ route('admin.create') }}" class=" text-white">
                                <i class="bi bi-plus-square"></i> Add
                            </a>
                        </button>
                    </div>
                    <h3 class="mb-4">Category: Articles at Video Editing Institute</h3>
                    <small>Read latest articles at Video Editing Institute on useful topics like photo editing, color
                        grading, video editing, color corrections, chrome keying, etc.</small>
                    <div class="mt-4">
                        @if ($articles->isNotEmpty())
                            @foreach ($articles as $article)
                                <div class="card border-0 border-bottom article-box">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h5 class="card-title">
                                                    <a href="#">{{ $article->title }}</a>
                                                </h5>
                                            </div>
                                            <div class="col-lg-2 d-flex justify-content-end">
                                                <button class="edit border-0 mx-1 px-2 rounded bg-success-subtle shadow-sm">
                                                    <a href="{{ route('articles.edit',$article->id) }}" class="text-white">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                </button>
                                                <button class="delete border-0 mx-1 px-2 rounded bg-danger-subtle shadow-sm">
                                                    <a href="#" onclick="deleteArticle({{ $article->id }});" class="text-white">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </button>
                                                <form id="delete-article-from-{{ $article->id }}" action="{{ route('articles.delete',$article->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </div>
                                        </div>
                                        <p class="card-text">
                                            <small class="text-body-secondary pe-2">
                                                <i class="bi bi-calendar3"></i>
                                                <a
                                                    href="#">{{ \Carbon\Carbon::parse($article->created_at)->format('d M, Y') }}</a>
                                            </small>
                                            <small class="text-body-secondary">
                                                <i class="bi bi-person-fill"></i>
                                                <a href="#">{{ $article->staff }}</a>
                                            </small>
                                        </p>
                                        @if ($article->image != '')
                                            <img class="img-fluid mb-2"
                                                src="{{ asset('uploads/articles/' . $article->image) }}" alt="">
                                        @endif
                                        <p>
                                            {{ $article->description }}
                                        </p>
                                        <p>
                                            <small class="text-body-secondary pe-2">
                                                <i class="bi bi-folder-fill"></i>
                                                <a href="#">{{ $article->academy }}</a>
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="row my-4">
                        {{ $articles->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!--Testimonials Main Content Ends-->
                <!--Right Sidebar Content Starts-->
                @include('layouts.sidebar')
                <!--Right Sidebar Content Ends-->
            </div>
        </div>
        <!--About Main Body Ends-->
        <!--My Script-->
        <script src="{{ asset('js/index.js') }}"></script>
    </body>

    </html>
@endsection
