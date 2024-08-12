<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>komsos - Gereja Kristus Raja</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="icon" type="image/png" href="{{ asset('frontend/frontend/img/pasput.png') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('frontend\frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('frontend\frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('frontend\frontend/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('frontend\frontend/css/style.css')}}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://web.facebook.com/GerejaKatolikPasirPutih"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/komsoskristusraja_pasirputih/?hl=en"><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/@gerejakatolikpasirputih5839"><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0 d-flex align-items-center">
                    <div class="d-inline-flex align-items-center" >
                        <img class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-4"
                        style="height: 70px; width:70px" src="{{ asset('frontend/frontend/img/pasput.png') }}" alt="">
                    </div>
                    <a href="" class="navbar-brand p-0">
                        <h1 class="m-0">GKRSA</h1>
                </a>
                
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('homepage')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('about')}}" class="nav-item nav-link">Profile</a>
                        <a href="{{ route('pengumuman')}}" class="nav-item nav-link">Pengumuman</a>
                        <a href="{{ route('berita1')}}" class="nav-item nav-link">Berita</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Komunitas</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('wkri')}}" class="dropdown-item">WKRI</a>
                                <a href="{{ route('omk')}}" class="dropdown-item">OMK</a>
                                <a href="{{ route('misdinar')}}" class="dropdown-item">MISDINAR</a>
                                <a href="{{ route('bir')}}" class="dropdown-item">BIR</a>
                                <a href="{{ route('bia')}}" class="dropdown-item">BIA</a>
                                <a href="{{ route('lingkungan')}}" class="dropdown-item">LINGKUNGAN</a>
                                <a href="{{ asset('frontend\frontend/404.html')}}" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="{{ route('contact')}}" class="nav-item nav-link">Contact</a>
            </nav>
        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Tentang Kami</h4>
                            <a href="" class="text-decoration-none"><i class="fas fa-home me-2"></i> Jl.Gereja no 101 Pasir Putih</a>
                            <a href="" class="text-decoration-none"><i class="fas fa-envelope me-2"></i> GKRSA@gmail.com</a>
                            <a href="" class="text-decoration-none"><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3 text-decoration-none"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            <div class="d-flex align-items-center justify-content-md-start justify-content-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
             
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Komunitas</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> WKRI</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> OMK</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> MISDINAR</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> BIR</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> BIA</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> LINGKUNGAN</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Alamat</h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.705241980861!2d101.47731357415141!3d0.4313718995644013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a577e4bea3d7%3A0x18d411aa14339847!2sCatholic%20Church%20Of%20Christ%20King%20Of%20Universe!5e0!3m2!1sen!2sid!4v1721038434809!5m2!1sen!2sid" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-5">
            <div class="container">
                <div class="row g-4 align-items-flex">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Komsos Gereja Kristus Raja Pasir Putih</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('frontend\frontend/lib/easing/easing.min.js')}}"></script>
        <script src="{{ asset('frontend\frontend/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{ asset('frontend\frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('frontend\frontend/lib/lightbox/js/lightbox.min.js')}}"></script>
        

        <!-- Template Javascript -->
        <script src="{{ asset('frontend\frontend/js/main.js')}}"></script>
    </body>

</html>