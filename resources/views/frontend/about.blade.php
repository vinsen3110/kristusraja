@extends('layouts.frontend')

@section('content')

<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Gereja Kristus Raja Semesta Alam</h1>
            {{-- <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('homepage')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">About</li>
            </ol> --}}
    </div>
</div>

<!-- About Start -->
<div class="container-fluid about py-3">
    <div class="container py-3">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                    <img src="{{ asset('frontend\frontend/img/altar.jpg')}}" class="img-fluid w-100 h-100" alt="">
                </div>
            </div>
            <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                <h5 class="section-about-title pe-3">Sejarah</h5>
                <h1 class="mb-4">Welcome to <span class="text-primary">Gereja Kristus Raja</span></h1>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum, doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam assumenda? Id atque iste consectetur. Commodi odit ab saepe!</p>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero numquam perferendis provident placeat molestiae
                    quia?
                </p>
               
        </div>
    </div>
</div>
<!-- About End -->

<!-- Travel Guide Start -->
<div class="container-fluid guide py-3">
    <div class="container py-3">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Dewan Pengurus Paroki</h5>
            <h1 class="mb-0">Kepengurusan</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="{{ asset('frontend\frontend/img/guide-1.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
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
                            <h4 class="mt-3">Full Name</h4>
                            <p class="mb-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="{{ asset('frontend\frontend/img/guide-2.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
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
                            <h4 class="mt-3">Full Name</h4>
                            <p class="mb-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="{{ asset('frontend\frontend/img/guide-3.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
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
                            <h4 class="mt-3">Full Name</h4>
                            <p class="mb-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="{{ asset('frontend\frontend/img/guide-4.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
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
                            <h4 class="mt-3">Full Name</h4>
                            <p class="mb-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Travel Guide End -->

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-3">
    <div class="container text-center py-3">
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