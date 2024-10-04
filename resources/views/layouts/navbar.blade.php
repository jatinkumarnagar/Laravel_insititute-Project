<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Link -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--Favicon Link-->
    <link rel="icon" type="image/x-icon" href="{!! asset('images/main-logo.ico') !!}">
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
</head>


<body>
    <!-- Top Head Starts -->
    <div class="custom-bg">
        <div class=" container custom-bg d-flex justify-content-between align-items-center">
            <div class="text-white">
                <a class="text-decoration-none fw-bold border-end ms-3 text-white" href="#">
                    <i class="bi bi-telephone-fill custom-cl2"></i>
                    +91-9911-782-350
                </a>
                <a class="text-decoration-none fw-bold border-end mx-2 text-white" href="#">
                    <i class="bi bi-envelope-fill custom-cl2"></i>
                    admecrohini@gmail.com
                </a>
                <span>
                    <i class="bi bi-hand-index-thumb custom-cl2"></i>
                    Popular Courses:
                    <a href="#" class="fw-bold text-white ps-2 text-decoration-underline">Read the best courses
                        from experts</a>
                </span>
            </div>
            <div class="">
                <ul class="d-flex list-unstyled mt-2">
                    <li class="border px-1 me-1">
                        <a href="#"><i class="bi bi-meta text-white"></i></a>
                    </li>
                    <li class="border px-1 me-1">
                        <a href="#"><i class="bi bi-twitter text-white"></i></a>
                    </li>
                    <li class="border px-1 me-1">
                        <a href="#"><i class="bi bi-youtube text-white"></i></a>
                    </li>
                    <li class="border px-1">
                        <a href="#"><i class="bi bi-linkedin text-white"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Top Head Ends -->
    <!-- header starts -->
    <div class="container">
        <nav class="navbar bg-white">
            <div class="container-fluid">
                <div class="navbar-brand d-flex">
                    <a href="#" class="text-decoration-none">
                        <img src="{{ asset('images/main-logo.jpg') }}" class="img-fluid custom-logo">
                    </a>
                    <span class="custom-cl2 fs-2">Video Editing Institute</span>
                </div>
                <form class="d-flex search-t-btn" role="search">
                    <input class="form-control rounded-start-pill shadow-none" type="search"
                        placeholder="Search your course..." aria-label="Search">
                    <button class="btn border rounded-end-pill text-white" style="background-color: #294a70;"
                        type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <!-- header ends -->
    <!-- Navbar -->
    <div class="text-white border-bottom border-warning border-4" style="background-color: #294a70;">
        <nav class="navbar navbar-expand-lg container py-0" id="nav-bar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item border-end border-start">
                            <a class="nav-link" href="{{ route('Home') }}">Home</a>
                        </li>
                        <li class="nav-item border-end">
                            <a class="nav-link" href="{{ route('About') }}">About Us</a>
                        </li>
                        <li class="nav-item border-end">
                            <a class="nav-link" href="{{ route('Course') }}">Our Courses</a>
                        </li>
                        <li class="nav-item border-end">
                            <a class="nav-link" href="{{ route('Testimonials') }}">Testmonials</a>
                        </li>
                        <li class="nav-item border-end">
                            <a class="nav-link" href="{{ route('Articles') }}">Articles</a>
                        </li>
                        <li class="nav-item border-end">
                            <a class="nav-link" href="https://www.admecindia.co.in/portfolio/">Portfolio</a>
                        </li>
                        <li class="nav-item border-end">
                            <a class="nav-link" href="{{ route('Quizes') }}">Quizzes</a>
                        </li>
                        <li class="nav-item border-end">
                            <a class="nav-link" href="{{ route('Contacts') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('nav')
    <!-- footer section -->
    <div class="custom-bg border-top border-4 border-warning">
        <div class="row container py-5 mx-auto">
            <div class="col-lg-3 text-white border-end px-4">
                <div>
                    <address><strong>ADMEC MULTIMEDIA</strong> Block C-9/15, 4th Floor, Opposite Metro Pillar No 399,
                        Sector- 7, Rohini, Delhi-110085, India <strong>Mob:<a href="#"
                                class="text-info text-decoration-none">+91-9811-818-122</a><a href="#"
                                class="text-warning text-decoration-none">+91-9911-782-350</a> Institute Timings:Mon -
                            Sat:</strong> 9:00 am - 8:00 pm Sunday: 12:00 pm - 4:00 pm</address>
                </div>
                <h5 class="text-white-50">Other Popular Courses</h5>
                <div>
                    <ul>
                        <li>3ds Max Master</li>
                        <li>Graphic Master Plus</li>
                        <li>Graphic Master</li>
                        <li>Graphic Premium</li>
                        <li>Graphic Standard</li>
                        <li>UI Design Course</li>
                        <li>UX Design Course</li>
                        <li>Illustrator Course</li>
                        <li>InDesign Training</li>
                        <li>CoralDrow Course</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 text-white border-end px-4">
                <h5 class="text-white-50">Useful Links</h5>
                <ul>
                    <li>Scholarship</li>
                    <li>Registration Procedure</li>
                    <li>Facilities</li>
                    <li>Carrer with Us</li>
                    <li>Post your Requirement</li>
                    <li>Placement Assistance</li>
                    <li>Training Methodology</li>
                    <li>Our Privacy Policy</li>
                    <li>Our Refund Policy</li>
                    <li>Our Portfolio</li>
                </ul>
                <h5 class="text-white-50">More Editing Courses</h5>
                <ul>
                    <li>Premiere Pro Course</li>
                    <li>Final Cut Pro</li>
                    <li>Final Cut Studio</li>
                    <li>Photoshop Program</li>
                    <li>Lightroom Training</li>
                    <li>Photo Editing Training</li>
                    <li>Premiere Rush Program</li>
                    <li>Cinema 4D</li>
                </ul>
            </div>
            <div class="col-lg-3 text-white border-end px-4">
                <h5 class="text-white-50">OUR PARTNERS</h5>
                <ul>
                    <li>ADMEC Multimedia Institute</li>
                    <li>Graphic Design Institute</li>
                    <li>CAD Training Institute</li>
                    <li>Post Production Institute</li>
                    <li>Web Development Institute</li>
                </ul>
                <h5 class="text-white-50">CONTACT US</h5>
                <ul class="d-flex list-unstyled mt-2">
                    <li class="border px-1 me-1">
                        <a href="#"><i class="bi bi-meta text-white"></i></a>
                    </li>
                    <li class="border px-1 me-1">
                        <a href="#"><i class="bi bi-twitter text-white"></i></a>
                    </li>
                    <li class="border px-1 me-1">
                        <a href="#"><i class="bi bi-youtube text-white"></i></a>
                    </li>
                    <li class="border px-1">
                        <a href="#"><i class="bi bi-linkedin text-white"></i></a>
                    </li>
                </ul>
                <h5 class="text-white-50">Diploma & Certificate Courses</h5>
                <ul>
                    <li>Editing & Film Making Program</li>
                    <li>Diploma in Post Production</li>
                    <li>Video Editing Diploma</li>
                    <li>3D Motion Graphics Course</li>
                    <li>Short Term Video Editing Course</li>
                    <li>YouTube Creator Studio</li>
                    <li>After Effects Master</li>
                    <li>YouTube Creator Studio</li>
                </ul>
            </div>
            <div class="col-lg-3 text-white px-4">
                <h5 class="text-white-50">Let Us Contact to You</h5>
                <form>
                    <div class="mt-2">
                        <label class="form-label">Your Name(*)</label>
                        <input type="text" class="form-control shadow-none rounded-0" required>
                    </div>
                    <div class="mt-2">
                        <label class="form-label">Your Phone(*)</label>
                        <input type="number" class="form-control shadow-none rounded-0" required>
                    </div>
                    <div class="mt-2 mb-3">
                        <label class="form-label">Your Email(*)</label>
                        <input type="email" class="form-control shadow-none rounded-0" required>
                    </div>
                    <button type="submit" class="my-2 px-3 py-2 btn btn-warning text-white rounded-0">Send</button>
                </form>
                <h5 class="text-white-50 mt-2">Web Courses</h5>
                <ul>
                    <li>Web Design Training</li>
                    <li>JavaScript Training</li>
                    <li>PHP MySQL Master</li>
                    <li>SQL Database Course</li>
                    <li>React Course</li>
                    <li>Digital Marketing</li>
                    <li>HTML5/CSS3 Course</li>
                    <li>WordPress Course</li>
                    <li>Python Training</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright -->
    <div class="text-white text-center p-3" style="background-color: #153058;">
        <span class="">Developed By Jatin Kumar Nagar</span>
    </div>
    <!-- copyright end -->
    <!--Bootstrap Script URL-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- Font Awesome CDN Kit -->
    <script src="https://kit.fontawesome.com/ce5127068e.js" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--My Script-->
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
