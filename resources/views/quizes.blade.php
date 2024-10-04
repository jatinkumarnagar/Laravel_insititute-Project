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
            <div class="row">
                <!--Testimonials Main Content Start-->
                <div class="col-lg-9 main-bd">
                    <h3 class="mb-4">Video Editing Quizzes</h3>
                    <div class="mt-4">
                        <p>[WpProQuiz 1]</p>
                        <hr>
                        <p>[WpProQuiz 2]</p>
                    </div>
                </div>
                <!--Testimonials Main Content Ends-->
                <!--Right Sidebar Content Starts-->
                @include('layouts.sidebar')
                <!--Right Sidebar Content Ends-->
            </div>
        </div>
        <!--About Main Body Ends-->
    </body>

    </html>
@endsection
