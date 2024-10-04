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
                    <h3 class="mb-4">Contact for Video Editing Courses in Rohini</h3>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Enroll Now</h4>
                                <div>
                                    <form>
                                        <div class="pt-3">
                                            <label class="form-label">Your Name(*)</label>
                                            <input type="text" class="shadow-none form-control" required>
                                        </div>
                                        <div class="pt-3">
                                            <label class="form-label">Your Phone(*)</label>
                                            <input type="number" class="shadow-none form-control w-75" required>
                                        </div>
                                        <div class="pt-3">
                                            <label class="form-label">Your Email(*)</label>
                                            <input type="email" class="shadow-none form-control" required>
                                        </div>
                                        <div class="pt-3">
                                            <label class="form-label">Course(*)</label>
                                            <select class="form-select" aria-label="Default select example" required>
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="py-3">
                                            <label class="form-label">Your Message</label>
                                            <textarea id="" cols="30" rows="10" class="shadow-none form-control"></textarea>
                                        </div>
                                        <button type="submit" class="my-2 px-3 py-2 btn btn-warning text-white rounded-0">Send</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4>Contact Us</h4>
                                <div class="mt-4">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d55989.58847020378!2d77.123213!3d28.709106!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d015fc7285ae3%3A0x6b0d619671ba366f!2sADMEC%20Multimedia%20Institute%20Rohini%20Delhi%20%7C%20Graphic%20Design%20Courses%20%7C%20Programming%20Courses%20%7C%20Video%20Editing%20Courses%20%7C%20CAD%20Courses!5e0!3m2!1sen!2sus!4v1718177249670!5m2!1sen!2sus" height="350" width="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="mt-3">
                                    <h5>Video Editing Institute</h5>
                                    <address>
                                        C-9/15, 4th Floor, Sector- 7, Rohini, Delhi- 85
                                        Landmark: Opposite Pillar No 399, Rohini East Metro Station
                                    </address>
                                    <p>
                                        Helpline 1: <a href="#" class="text-decoration-none">+91 9811 – 818 – 122</a>
                                        <br>
                                        Helpline 2: <a href="#" class="text-decoration-none">+91 9911 – 782 – 350</a>
                                    </p>
                                </div>
                            </div>
                        </div>
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
