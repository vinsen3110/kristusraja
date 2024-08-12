@extends('layouts.frontend')

@section('content')
 <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend\frontend/img/gereja.jpeg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Sejarah Gereja</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Kristus Raja Semesta Alam Pasir Putih</h1>
                                    <p class="mb-5 fs-5">Masih dalam uji coba... ini merupakan paragraf singkat dari page sejarah gereja
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('about')}}">See more..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend\frontend/img/uskup2.jpg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h1 class="display-2 text-capitalize text-white mb-4">Keuskupan Padang</h1>
                                    <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">See more..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend\frontend/img/pemberkatan.jpg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Peletakan Batu Pertama</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Pastoran Kristus Raja</h1>
                                    <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">see more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%); padding:0">
            <div class="container">
                <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(19, 53, 123, 0.8);">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="pencarian...">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
         <!-- Jadwal Misa -->
         <div class="container-fluid destination py-2">
            <div class="container py-2">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">JADWAL MISA</h5>
                    <h1 class="mb-5">HARI MINGGU : 09:00 WIB</h1>
                    <h1 class="mb-0">HARI SABTU : 18:00 WIB</h1>
                </div>
            </div>
        </div>

        <!-- About Start -->
       
        <!-- About End -->

          <!-- Packages Start -->
          <div class="container-fluid packages py-3">
            <div class="container py-3">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">BERITA</h5>
                    <h1 class="mb-0">Berita Bulanan</h1>
                </div>
                <div class="packages-carousel owl-carousel">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset('frontend\frontend/img/4.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end-0 py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>12 Augst 2024</small>
                            </div>
                        </div>
                        <div class="packages-content bg-light" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Judul berita</h5>
                                <small class="text-uppercase">komsos pasir putih</small>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="{{ route('selengkapnya')}}" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset('frontend\frontend/img/5.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end-0 py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>12 Augst 2024</small>
                            </div>
                        </div>
                        <div class="packages-content bg-light" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Judul berita</h5>
                                <small class="text-uppercase">Komsos Pasir putih</small>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="{{ route('selengkapnya')}}" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset('frontend\frontend/img/6.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end-0 py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>12 Augst 2024</small>
                            </div>
                        </div>
                        <div class="packages-content bg-light" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Judul Berita</h5>
                                <small class="text-uppercase">Komsos Pasir Putih</small>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="{{ route('selengkapnya')}}" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset('frontend\frontend/img/7.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end-0 py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>12 Augst 2024</small>
                            </div>
                        </div>
                        <div class="packages-content bg-light" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Judul Berita</h5>
                                <small class="text-uppercase">Komsos Pasir Putih</small>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="{{ route('selengkapnya')}}" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Packages End -->

       
                {{-- <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">All</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">WKRI</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">OMK</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 150px;">MISDINAR</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 150px;">BIA</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-6">
                                <span class="text-dark" style="width: 150px;">LINGKUNGAN</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-xl-8">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="{{ asset('frontend\frontend/img/destination-1.jpg')}}" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">Photos</a>
                                                    <h4 class="text-white mb-2 mt-3">WKRI</h4>
                                                    <a href="#" class="btn-hover text-white">Lihat selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{ asset('frontend\frontend/img/destination-1.jpg')}}" data-lightbox="destination-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="{{ asset('frontend\frontend/img/destination-2.jpg')}}" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">Photos</a>
                                                    <h4 class="text-white mb-2 mt-3">OMK</h4>
                                                    <a href="#" class="btn-hover text-white">Lihat selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/destination-2.jpg" data-lightbox="destination-2"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="{{ asset('frontend\frontend/img/destination-7.jpg')}}" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">Photos</a>
                                                    <h4 class="text-white mb-2 mt-3">MISDINAR</h4>
                                                    <a href="#" class="btn-hover text-white">Lihat selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{ asset('frontend\frontend/img/destination-7.jpg')}}" data-lightbox="destination-7"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="{{ asset('frontend\frontend/img/destination-8.jpg')}}" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">Photos</a>
                                                    <h4 class="text-white mb-2 mt-3">BIA</h4>
                                                    <a href="#" class="btn-hover text-white">Lihat selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{ asset('frontend\frontend/img/destination-8.jpg')}}" data-lightbox="destination-8"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="destination-img h-100">
                                        <img class="img-fluid rounded w-100 h-100" src="{{ asset('frontend\frontend/img/destination-9.jpg')}}" style="object-fit: cover; min-height: 300px;" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">Photos</a>
                                            <h4 class="text-white mb-2 mt-3">LINGKUNGAN</h4>
                                            <a href="#" class="btn-hover text-white">Lihat selengkapnya<i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-9.jpg" data-lightbox="destination-4"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Destination End -->

        <!-- Explore Tour Start -->
        
        <!-- Explore Tour Start -->

        <!-- lokasi gereja-->
        <div class="container-fluid gallery py-3 my-3">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">MAPS</h5>
                <h1 class="mb-4">LOKASI GEREJA</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.705241980861!2d101.47731357415141!3d0.4313718995644013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a577e4bea3d7%3A0x18d411aa14339847!2sCatholic%20Church%20Of%20Christ%20King%20Of%20Universe!5e0!3m2!1sen!2sid!4v1721038434809!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#GalleryTab-1">
                            <span class="text-dark" style="width: 150px;">All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-2">
                            <span class="text-dark" style="width: 150px;">World tour</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-3">
                            <span class="text-dark" style="width: 150px;">Ocean Tour</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-4">
                            <span class="text-dark" style="width: 150px;">Summer Tour</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-5">
                            <span class="text-dark" style="width: 150px;">Sport Tour</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-2">
                </div>
            </div>
        </div>
        <!-- Gallery End -->

        <!-- Tour Booking Start -->
        {{-- <div class="container-fluid booking py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h5 class="section-booking-title pe-3">Booking</h5>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                        </p>
                        <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                        </p>
                        <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="text-white mb-3">Book A Tour Deals</h1>
                        <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure Trip With Travela. Get More Deal Offers Here.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-white border-0" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-white border-0" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control bg-white border-0" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="select1">
                                            <option value="1">Destination 1</option>
                                            <option value="2">Destination 2</option>
                                            <option value="3">Destination 3</option>
                                        </select>
                                        <label for="select1">Destination</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="SelectPerson">
                                            <option value="1">Persons 1</option>
                                            <option value="2">Persons 2</option>
                                            <option value="3">Persons 3</option>
                                        </select>
                                        <label for="SelectPerson">Persons</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="CategoriesSelect">
                                            <option value="1">Kids</option>
                                            <option value="2">1</option>
                                            <option value="3">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <label for="CategoriesSelect">Categories</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-white border-0" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary text-white w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Tour Booking End -->

        <!-- kepengurusan -->
        <!-- kepengurusan -->
        <div class="container-fluid guide py-3">
            <div class="container py-3">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Dewan Pastoral Paroki</h5>
                    <h1 class="mb-0">Kepengurusan</h1>
                </div>
                
                    
                
                <div class="row g-4">
                    @foreach ($kepengurusan as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    @if ($item->cover != '')
                                                        <img src="{{ asset('storage/cover/' . $item->cover) }}"
                                                            alt="" class="img-fluid w-100 rounded-top">
                                                    @else
                                                        <img src="{{ asset('img/foto-not-font.jpeg') }}" alt=""
                                                            class="img-fluid w-100 rounded-top">
                                                    @endif
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">{{ $item->nama}}</h4>
                                    <p class="mb-0">{{ $item->jabatan }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>
        {{-- <div class="container-fluid guide py-3">
            <div class="container py-3">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Dewan Pastoral Paroki</h5>
                    <h1 class="mb-0">Kepengurusan</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{ asset('frontend\frontend/img/vinsen.jpeg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">Boy</h4>
                                    <p class="mb-0">Ketua Paroki</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{ asset('frontend\frontend/img/vinsen2.jpeg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">Vin</h4>
                                    <p class="mb-0">Wakil ketua Paroki</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{ asset('frontend\frontend/img/vinsen3.jpeg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">Nugroho</h4>
                                    <p class="mb-0">Sekretaris</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{ asset('frontend\frontend/img/vinsen4.jpeg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">Arjuna</h4>
                                    <p class="mb-0">Bendahara</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Travel Guide End -->

        <!-- Blog Start -->
        {{-- <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Our Blog</h5>
                    <h1 class="mb-4">Popular Travel Blogs</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt error obcaecati ducimus officia maiores.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="{{ asset('frontend\frontend/img/blog-1.jpg')}}" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Posted By: Royal Hamblin </p>
                                <a href="#" class="h4">Adventures Trip</a>
                                <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="img/blog-2.jpg" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Posted By: Royal Hamblin </p>
                                <a href="#" class="h4">Adventures Trip</a>
                                <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="img/blog-3.jpg" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Posted By: Royal Hamblin </p>
                                <a href="#" class="h4">Adventures Trip</a>
                                <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Blog End -->

        <!-- Testimonial Start -->
        {{-- <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Testimonial</h5>
                    <h1 class="mb-0">Our Clients Say!!!</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">John Abraham</h5>
                            <p class="mb-0">New York, USA</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">John Abraham</h5>
                            <p class="mb-0">New York, USA</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">John Abraham</h5>
                            <p class="mb-0">New York, USA</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">John Abraham</h5>
                            <p class="mb-0">New York, USA</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Testimonial End -->

        <!-- Subscribe Start -->
        <div class="container-fluid subscribe py-5">
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">Subscribe</h5>
                    <h1 class="text-white mb-4">Our Newsletter</h1>
                    <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
                    </p>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->
    
@endsection