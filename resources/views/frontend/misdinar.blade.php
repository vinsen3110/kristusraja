@extends('layouts.frontend')

@section('content')
 <!-- Header Start -->
 <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">MISDINAR</h1>
        {{-- <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Blog</li>
        </ol>     --}}
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-fluid blog py-4">
    <div class="container py-4">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">APA ITU MISDINAR?</h5>
            <h1 class="mb-4">Putra Putri Altar</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt error obcaecati ducimus officia maiores.
            </p>
            <h5 class="section-title px-3" style="margin: 20px">Pendaftaran MISDINAR</h5>
            <div class="d-flex align-items-center justify-content-center">
                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('about')}}">Daftar disini</a>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            {{-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
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
            </div> --}}
        </div>
    </div>
</div>
<!-- Blog End -->
<div class="container-fluid packages py-2">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3" style="margin-top: 0%">Kabar Berita</h5>
            <h1 class="mb-0">Berita MISDINAR</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="{{ asset('frontend/frontend/img/4.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end-0 py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>12 Augst 2024</small>
                        </div>
                    </div>
                    <div class="packages-content bg-light " style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                        <div class="p-4 pb-0">
                            <h5 class="mb-0">Judul berita</h5>
                            <small class="text-uppercase">komsos pasir putih</small>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="{{ asset('frontend/frontend/img/5.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
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
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="{{ asset('frontend/frontend/img/6.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
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
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="{{ asset('frontend/frontend/img/7.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
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
                                <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat as necessary -->
        </div>
    </div>
</div>


@endsection