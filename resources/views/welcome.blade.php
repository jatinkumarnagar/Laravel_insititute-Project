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
        <!--Slider Home Starts-->
        <div class="swiper mySwiper position-relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/about-us1.jpg') }}" class="img-fluid">
                </div>
            </div>
            <div class="swiper-button-next btn-arrow text-white fw-bold"></div>
            <div class="swiper-button-prev btn-arrow text-white fw-bold"></div>
        </div>
        <div class="position-absolute container bg-white bg-opacity-75 p-4 slider-text">
            <h3>
                <a href="#" class="text-decoration-none">Useful Video Editing Courses Students' Testimonials</a>
            </h3>
            <p class="">Name: Rishikesh Kushvaha Course Applied: Post Production Premium Job: Video Editor (TIOL TUBE)
                I did post production course from this institute and I want to say that it is a place where you...</p>
        </div>
        <!--Slider Home Ends-->
        <!--Home Main Body Starts-->
        <div class="container my-5">
            <div class="row">
                <!--Home Main Content Start-->
                <div class="col-lg-9 main-bd">
                    <h3 class="mb-4">Welcome to Video Editing Institute in Rohini</h3>
                    <div>
                        <h5>About Video Editing Institute in Rohini</h5>
                        <p>Video Editing Institute (VEI) is the leading and well-established editing institute in Delhi-NCR
                            offering professional training in video editing and film making courses. Video Editing Institute
                            in Rohini is the dedicated education portal of ADMEC Multimedia Institute for video editing
                            courses.</p>
                    </div>
                    <div>
                        <h5>Why Courses in Video Editing are so Popular?</h5>
                        <p>In essence editing forms a crucial part of film making and calls for immense knowledge of film
                            grammar and storytelling techniques. Remarkably technical yet exceedingly artistic, a career in
                            television and film editing is both creative and monetarily satisfying. At our video editing
                            institute, we emphasize on providing in-depth training and learning in all our job oriented
                            courses of video editing.</p>
                        <p>All the editing courses of videos available at our editing institute in Delhi are crafted after
                            rigorous research by our expert faculty. Our vide editing course are recognized internationally
                            by big production and film making houses and MNC’s associated with the post production industry.
                        </p>
                    </div>
                    <div>
                        <h5>Most Popular Video Editing Courses offered by Video Editing Institute</h5>
                        <p>Video Editing Institute (VEI) offers allied range of diploma and certificate courses in audio and
                            video editing software such as Adobe Premiere Pro, Final Cut Pro etc. with 100% Job – Placement
                            assistance. Some of our cutting edge courses in video editing are Post Production Master, Post
                            Production Premium, Post Production Standard, FCS Master, FCPX, etc. Our editing institute in
                            Delhi also facilitates training in single software such as Photoshop, Illustrator, Nuke, After
                            Effects, Cinema 4D and alike.</p>
                        <table class="w-100 table-bordered text-center mb-4">
                            <tr>
                                <th>Certificate Courses</th>
                                <th>Course Duration</th>
                            </tr>
                            <tr>
                                <td>Final Cut Pro X</td>
                                <td>1.5 Months</td>
                            </tr>
                            <tr>
                                <td>FCS Master</td>
                                <td>3 Months</td>
                            </tr>
                            <tr>
                                <td>Adobe Premiere Pro</td>
                                <td>1.5 Months</td>
                            </tr>
                            <tr>
                                <td>Adobe After Effects</td>
                                <td>1.5 Months</td>
                            </tr>
                            <tr>
                                <td>Adobe Photoshop</td>
                                <td>2 Months</td>
                            </tr>
                            <tr>
                                <td>Adobe Lightroom</td>
                                <td>1 Months</td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <h5>Training Methodology of Video Editing Course</h5>
                        <p>Students at Video Editing Institute (VEI) are trained to be professional video editors and not
                            merely machine operators. <strong><a href="#" class="text-decoration-none">Faculty at the
                                    video editing institute</a></strong> offers hands on practical training using different
                            video editing software specified according to their curriculum. Student will get training on
                            both fundamental and aesthetic principles of editing for television and films.</p>
                    </div>
                    <div>
                        <h5>Why our Video Editing Course is Different?</h5>
                        <p>Video Editing Institute (VEI) one of the dedicated education subsidiary of ADMEC Multimedia
                            Institute is premier editing institute in Delhi established in 2006. VEI differs from other
                            video editing institute in their approach, training methodologies, industry relevant curriculum
                            and high creative thinking.</p>
                        <div>
                            <h6>We Offer Video Editing Online Courses</h6>
                            <p>At our training institute, you will join various online video editing courses too. In all the
                                video editing courses online, you will get high-level instruction in diligent use of video
                                editing software, its interface and other tools n features. Faculty here, believes in
                                training students with tremendous job potential along with editing techniques for film
                                making and video editing. Such unique online video editing teaching approach and outstanding
                                techniques allows our students to outshine from others.</p>
                        </div>
                        <div>
                            <h6>We Offer Photo Editing Courses</h6>
                            <p>We offer advanced training for many photo editing courses here. Courses in photo editing are
                                in-demand and offer highly paid career options. Just like our video editor course, our
                                courses in photo editing are also very useful. All types of courses available in online
                                training mode also.</p>
                        </div>
                        <div>
                            <h6>Very affordable video editing courses fees</h6>
                            <p>We believe in education for all so teaching everyone by offering video editing courses at
                                very affordable fees. You can pay our course fees of video editing courses in easy
                                installments.</p>
                        </div>
                        <div>
                            <h6>Live project training at our editing instiute in Delhi</h6>
                            <p>Moreover we provide exposure of live project training to our students which will help them to
                                testify their knowledge and will add to their experience. Live project training is the main
                                reason why our students have outstanding placement record nationally and internationally.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Home Main Content Ends-->
                <!--Right Sidebar Content Starts-->
                @include('layouts.sidebar')
                <!--Right Sidebar Content Ends-->
            </div>
        </div>
        <!--Home Main Body Ends-->
    </body>

    </html>
@endsection
