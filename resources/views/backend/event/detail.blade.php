@extends('maintemplate')


@section('container')
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Event Detail</h2>
                    <ol>
                        <li><a href="{{ route('utama') }}">Home</a></li>
                        <li><a href="{{ route('utama') }}">Event</a></li>
                        <li>Event Detail</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Breadcrumbs Section -->

        <!-- ======= Portfolio Details Section ======= -->
        {{-- @foreach ($event as $item) --}}
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $event->image) }}" alt="" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Event information</h3>
                            <ul>
                                <li><strong>Kategori Event</strong>: {{ $event->category }}</li>
                                <li><strong>Dilaksanakan</strong>: {{ $event->city }}</li>
                                <li><strong>Project date</strong>:
                                    {{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}</li>
                                <li>
                                    <strong>Alamat</strong>:
                                    <a href="{{ $event->google_map_link }}" target="_blank">{{ $event->location }}</a>
                                    <iframe src="{{ $event->google_map_embed }}" width="600" height="450"
                                        style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- End Portfolio Details Section -->
    </main>
    <!-- End #main -->
@endsection
