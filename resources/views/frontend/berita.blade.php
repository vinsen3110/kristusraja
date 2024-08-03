@extends('layouts.frontend')

@section('content')

 {{-- <!-- Header Start -->
 <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Travel Packages</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Packages</li>
        </ol>    
    </div>
</div> --}}
<!-- Header End -->

<!-- Packages Start -->
<div class="container-fluid packages py-2">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3" style="margin-top: 10%">Berita</h5>
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
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
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
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
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
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
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
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  {{-- kolom 2 --}}
  <div class="container-fluid packages py-3">
    <div class="container py-3">
  <div class="packages-carousel owl-carousel">
    <div class="packages-item">
        <div class="packages-img">
            <img src="{{ asset('frontend\frontend/img/packages-4.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                <small class="flex-fill text-center border-end-0 py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>12 Augst 2024</small>
            </div>
        </div>
        <div class="packages-content bg-light" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
            <div class="p-4 pb-0">
                <h5 class="mb-0">Venice - Italy</h5>
                <small class="text-uppercase">Hotel Deals</small>
                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
            </div>
            <div class="row bg-primary rounded-bottom mx-0">
                <div class="col-6 text-start px-0">
                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="packages-item">
        <div class="packages-img">
            <img src="{{ asset('frontend\frontend/img/packages-3.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                <small class="flex-fill text-center border-end-0 py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>12 Augst 2024</small>
            </div>
        </div>
        <div class="packages-content bg-light" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
            <div class="p-4 pb-0">
                <h5 class="mb-0">Venice - Italy</h5>
                <small class="text-uppercase">Hotel Deals</small>
                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
            </div>
            <div class="row bg-primary rounded-bottom mx-0">
                <div class="col-6 text-start px-0">
                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="packages-item">
        <div class="packages-img">
            <img src="{{ asset('frontend\frontend/img/packages-2.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                <small class="flex-fill text-center border-end-0 py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>12 Augst 2024</small>
            </div>
        </div>
        <div class="packages-content bg-light" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
            <div class="p-4 pb-0">
                <h5 class="mb-0">Venice - Italy</h5>
                <small class="text-uppercase">Hotel Deals</small>
                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
            </div>
            <div class="row bg-primary rounded-bottom mx-0">
                <div class="col-6 text-start px-0">
                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="packages-item">
        <div class="packages-img">
            <img src="{{ asset('frontend\frontend/img/packages-1.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                <small class="flex-fill text-center border-end-0 py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>12 Augst 2024</small>
            </div>
        </div>
        <div class="packages-content bg-light" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
            <div class="p-4 pb-0">
                <h5 class="mb-0">Venice - Italy</h5>
                <small class="text-uppercase">Hotel Deals</small>
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
    </div>
</div>
<!-- Packages End -->

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

@endsection