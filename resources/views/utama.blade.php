@extends('maintemplate')

@section('container')
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Berdaya, Berkarya, Bermakna</h1>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="assets/img/hero-img.svg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>

    <main id="main">

        <!-- About Section -->
        <section id="about" class="about">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up">Profil Rumah Millennials</h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Platform Jejaring Sosial dan Pusat Pembelajaran Milenial
                        </p>
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt text-justify"></i>
                                <h4>Latar Belakang</h4>
                                <p align="justify">Bonus Demografi Indonesia didominasi oleh generasi muda, yang memerlukan
                                    peningkatan kualitas dan karakter yang kuat. Banyak pemuda Indonesia yang aktif peduli
                                    dan bergerak, baik secara individu maupun komunal. Semangat gotong royong, guyup,
                                    sinergi, dan kolaborasi perlu dijaga di antara pemuda Indonesia.</p>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Tujuan RM</h4>
                                <p align="justify">Merangsang generasi muda agar lebih aktif, optimis, dan berkontribusi
                                    dalam lingkungannya. Menampilkan teladan dari generasi muda yang berprestasi untuk
                                    menginspirasi anak muda lainnya. Memfasilitasi pertemuan lintas bidang generasi muda
                                    untuk saling melengkapi dan berkontribusi demi kebaikan bersama.</p>
                                <p style="text-align: right;">
                                    <a href="https://rumahmillennials.com/about/" style="text-decoration: underline;">View
                                        Detail</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- Services Section -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <p>Program</p>
                </div>

                <div class="row">
                    @foreach ($programs as $item)
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box w-100" style="height: 400px">
                                <div class="icon"><i class="{{ $item->icon }}"></i></div>
                                <h4 class="title"><a href="">{{ $item->title }}</a></h4>
                                <p align="justify" class="description">{{ $item->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Event</h2>
                    <p>Event Rumah Millennials</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Akan Datang</li>
                            <li data-filter=".filter-app">Sudah Terlaksana</li>
                            <!-- <li data-filter=".filter-card">Card</li>
                                                                                                                                                                                            <li data-filter=".filter-web">Web</li> -->
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach ($events as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item {{ $item->attribute }}">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid"
                                    style="width: 100%; height: 250px;" alt="" />
                                <div class="portfolio-links">
                                    <a href="{{ asset('storage/' . $item->image) }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="{{ $item->description }}"><i
                                            class="bi bi-plus"></i></a>
                                    <a href="{{ route('event.gallery', $item->id) }}" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                                <div class="portfolio-info">
                                    <h4>{{ $item->name }}</h4>
                                    <p>{{ \Carbon\Carbon::parse($item->date)->format('d F Y') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="M-Talks merupakan program Talkshow yang mengangkat berbagai macam tema, yang bertujuan untuk pengembang soft-skills bagi generasi Millennials. M-Talks kali ini akan dilaksanakan diwilayah jabodetabek, see u all!!"><i
                                        class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>M Talks Community Empowerment</h4>
                                <p>01 Maret 2024</p>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- F.A.Q Section  -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>

                <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($qnas as $index => $item)
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq{{ $index + 1 }}">
                                {{ $item->question }}
                                <i class="bi bi-chevron-down icon-show"></i>
                                <i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq{{ $index + 1 }}" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    {{ $item->answer }}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </section>
        <!-- End F.A.Q Section -->

        <!-- Team Section  -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Person in Charge</h2>
                    <p>Our team is always here to help</p>
                </div>

                <div class="row justify-content-center">
                    @foreach ($team as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member">
                                <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>{{ $item->name }}</h4>
                                        <span>{{ $item->position }}</span>
                                    </div>
                                    <div class="social">
                                        <a href="{{ $item->twitter }}" target="_blank"><i class="bi bi-twitter"></i></a>
                                        <a href="{{ $item->facebook }}" target="_blank"><i
                                                class="bi bi-facebook"></i></a>
                                        <a href="{{ $item->instagram }}" target="_blank"><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="{{ $item->linkedin }}" target="_blank"><i
                                                class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Partners</h2>
                    <p>EXCLUSIVE PARTNERSHIP</p>
                </div>

                <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($partnerships as $item)
                            <div class="swiper-slide"><img src="{{ asset('storage/' . $item->image) }}"
                                    class="img-fluid" alt=""></div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- Contact Us Section -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact Us</h2>
                    <p>Contact us the get started</p>
                </div>

                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="info">
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="{{ route('send.email') }}" method="post" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="inputName">Your Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name"
                                        required>
                                    @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                    @error('email')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="inputSubject">Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Enter subject">
                                @error('subject')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                                <div class="form-group mt-3">
                                    <label for="inputMessage">Message</label>
                                    <textarea name="content" rows="5" class="form-control" placeholder="Enter Your Message"></textarea>
                                    @error('content')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>
                                        Send</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Us Section -->

    </main>
    <!-- End #main -->
@endsection
