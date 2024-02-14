@extends('maintemplate')

@section('container')
<section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1>Berdaya, Berkarya, Bermakna</h1>
      <!-- <h2>We are team of talented designers making websites with Bootstrap</h2> -->
      <div>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img">
      <img src="assets/img/hero-img.svg" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
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
            <p align="justify">Bonus Demografi Indonesia didominasi oleh generasi muda, yang memerlukan peningkatan kualitas dan karakter yang kuat. Banyak pemuda Indonesia yang aktif peduli dan bergerak, baik secara individu maupun komunal. Semangat gotong royong, guyup, sinergi, dan kolaborasi perlu dijaga di antara pemuda Indonesia.</p>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-cube-alt"></i>
            <h4>Tujuan RM</h4>
            <p align="justify">Merangsang generasi muda agar lebih aktif, optimis, dan berkontribusi dalam lingkungannya. Menampilkan teladan dari generasi muda yang berprestasi untuk menginspirasi anak muda lainnya. Memfasilitasi pertemuan lintas bidang generasi muda untuk saling melengkapi dan berkontribusi demi kebaikan bersama.</p>
          </div>
        </div>
        <p><u>
          <a href="https://rumahmillennials.com/about/" > View Detail </a>
        </u></p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <!-- <h2>Services</h2> -->
      <p>Program</p>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4 class="title"><a href="">Millennials Talks</a></h4>
          <p align="justify" class="description">M-Talks merupakan program Talkshow yang mengangkat berbagai macam tema, yang bertujuan untuk pengembang soft-skills bagi generasi Millennials.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href="">Millennials Professional Development</a></h4>
          <p align="justify" class="description">MPD (Millennials Personal Development) merupakan program mentoring dari penjaga rumah, community ambassador, dan ketua bidang yang ahli di bidangnya untuk pengembangan diri Millennials Indonesia.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4 class="title"><a href="">Millennials Day Out</a></h4>
          <p align="justify" class="description">MDO (Millennials Day Out) merupakan Program having fun untuk mempererat silaturahmi dan mengasah kreatifitas generasi millennials.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-world"></i></div>
          <h4 class="title"><a href="">Millennials Meeting</a></h4>
          <p align="justify" class="description">Millennials meeting merupakan kegiatan silaturahmi dan meeting yang dilakukan oleh siblings (pengurus inti Rumah Millennials), penjaga rumah, ketua – ketua bidang, community ambassador dan anggota Rumah Millennials Campus Network (RMCN).</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <!-- <h2>Portfolio</h2> -->
      <p>Gallery</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>M Talks Community Empowerment</h4>
            <p>22 Februari 2020</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>M-talks</h4>
            <p>Inclusion 101: Travel with Kindness</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>M-Talks</h4>
            <p>Say No To Hoax & 2nd Anniversary Rumah Millennials</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Road To 1st Anniversary Rumah Millennials</h4>
            <p>Juli 2018</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Rumah Millennials x Parfi 56 x Pusbang Kemendikbud</h4>
            <p>Februari – April 2018</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>M-Talks Perempuan Bercerita</h4>
            <p>Rumah Millennials 2019</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>M-Talks</h4>
            <p>Explore Indonesia With Tourism</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Good News From Indonesia x Rumah Millennials</h4>
            <p>Rumah Millennials 2018</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Grand Launching Rumah Millennials</h4>
            <p>2017</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>F.A.Q</h2>
      <p>Frequently Asked Questions</p>
    </div>

    <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

      <li>
        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apa itu komunitas Rumah Millennials?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
          <p>
            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Bagaimana komunitas Rumah Millennials terbentuk? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
          <p>
            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Bagaimana cara mendaftar menjadi anggota komunitas Rumah Millennials?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
          <p>
            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
          </p>
        </div>
      </li>
    </ul>

  </div>
</section><!-- End F.A.Q Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Person in Charge</h2>
      <p>Our team is always here to help</p>
    </div>

    <div class="row justify-content-center">

      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="member">
          <img src="{{asset('assets/img/team/taufan.jpg')}}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>TAUFAN TEGUH AKBARI</h4>
              <span>FOUNDER & CHAIRMAN</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="member">
          <img src="assets/img/team/asih.jpeg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>ASIH DEWI KARIM</h4>
              <span>GENERAL SECRETARY</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Team Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Clients</h2>
      <p>They trusted us</p>
    </div>

    <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact Us</h2>
      <p>Contact us the get started</p>
    </div>

    <div class="row">

      <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="info">
          <!-- <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div> -->

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

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>

      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section>
<!-- End Contact Us Section -->

</main><!-- End #main -->

@endsection