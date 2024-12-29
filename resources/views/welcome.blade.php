<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SabarNgoding</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo/LOGO SABAR NGODING revisi.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: SabarNgoding
  * Template URL: https://bootstrapmade.com/SabarNgoding-bootstrap-startup-template/
  * Updated: Nov 01 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logo/LOGO SABAR NGODING revisi.png') }}" alt="" height="50">
                <h1 class="sitename">SabarNgoding</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="blog.html">BELAJAR</a></li>
                    <li class="dropdown"><a href="#"><span>KOMUNITAS</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                    <li class="listing-dropdown"><a href="#"><span>DEVELOPER</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li>
                                <a href="#">Column 1 link 1</a>
                                <a href="#">Column 1 link 2</a>
                                <a href="#">Column 1 link 3</a>
                            </li>
                            <li>
                                <a href="#">Column 2 link 1</a>
                                <a href="#">Column 2 link 2</a>
                                <a href="#">Column 3 link 3</a>
                            </li>
                            <li>
                                <a href="#">Column 3 link 1</a>
                                <a href="#">Column 3 link 2</a>
                                <a href="#">Column 3 link 3</a>
                            </li>
                            <li>
                                <a href="#">Column 4 link 1</a>
                                <a href="#">Column 4 link 2</a>
                                <a href="#">Column 4 link 3</a>
                            </li>
                            <li>
                                <a href="#">Column 5 link 1</a>
                                <a href="#">Column 5 link 2</a>
                                <a href="#">Column 5 link 3</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('login') }}">MASUK</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted flex-md-shrink-0" href="{{ url('register') }}">DAFTAR</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">SABAR <span>NGODING</span></h1>
                        <p data-aos="fade-up" data-aos-delay="100">Sabar Ngoding merupakan sebuah platform Pembelajaran
                            Pemrograman Berbasis online dengan modul lengkap beserta video, dengan Mentor dan penulis
                            berpengalaman pada bidangnya.</p>
                        <div class="d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                            <form action="/search" method="get"
                                class="d-flex align-items-center w-100 position-relative">
                                <input type="text" name="query" class="form-control pe-5"
                                    placeholder="Apa yang ingin Anda pelajari?" aria-label="Search">
                                <i class="bi bi-search position-absolute end-0 me-3"
                                    style="top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                            </form>
                        </div>
                    </div>

                    <!-- Tambahkan div gambar di sini -->
                    <div class="col-lg-6 order-1 order-lg-2 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/bannerok.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>



        </section><!-- /Hero Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="stats-slider d-flex overflow-hidden"
                    style="position: relative; white-space: nowrap; animation: scroll 15s linear infinite;">

                    <div class="stats-item d-inline-flex align-items-center mx-4 p-3"
                        style="border: 1px solid #ddd; border-radius: 8px; cursor: pointer; transition: box-shadow 0.3s ease;"
                        onmouseover="pauseAnimation(this)" onmouseout="resumeAnimation(this)">
                        <img src="{{ asset('assets/img/logo/laravel.png') }}" alt="Laravel Logo"
                            class="flex-shrink-0" style="width: 40px; height: auto; margin-right: 10px;">
                        <div>
                            <span>Laravel</span>
                            <p>Framework for Web Artisan</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-inline-flex align-items-center mx-4 p-3"
                        style="border: 1px solid #ddd; border-radius: 8px; cursor: pointer; transition: box-shadow 0.3s ease;"
                        onmouseover="pauseAnimation(this)" onmouseout="resumeAnimation(this)">
                        <img src="{{ asset('assets/img/logo/react.png') }}" alt="React Logo" class="flex-shrink-0"
                            style="width: 40px; height: auto; margin-right: 10px;">
                        <div>
                            <span>React</span>
                            <p>Javascript Library</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-inline-flex align-items-center mx-4 p-3"
                        style="border: 1px solid #ddd; border-radius: 8px; cursor: pointer; transition: box-shadow 0.3s ease;"
                        onmouseover="pauseAnimation(this)" onmouseout="resumeAnimation(this)">
                        <img src="{{ asset('assets/img/logo/vue.png') }}" alt="Vue Logo" class="flex-shrink-0"
                            style="width: 40px; height: auto; margin-right: 10px;">
                        <div>
                            <span>Vue</span>
                            <p>Javascript Library</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-inline-flex align-items-center mx-4 p-3"
                        style="border: 1px solid #ddd; border-radius: 8px; cursor: pointer; transition: box-shadow 0.3s ease;"
                        onmouseover="pauseAnimation(this)" onmouseout="resumeAnimation(this)">
                        <img src="{{ asset('assets/img/logo/expres.png') }}" alt="Express Logo" class="flex-shrink-0"
                            style="width: 40px; height: auto; margin-right: 10px;">
                        <div>
                            <span>Express</span>
                            <p>NodeJS Framework</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="stats-item d-inline-flex align-items-center mx-4 p-3"
                        style="border: 1px solid #ddd; border-radius: 8px; cursor: pointer; transition: box-shadow 0.3s ease;"
                        onmouseover="pauseAnimation(this)" onmouseout="resumeAnimation(this)">
                        <img src="{{ asset('assets/img/logo/nextjs.png') }}" alt="Next.js Logo" class="flex-shrink-0"
                            style="width: 40px; height: auto; margin-right: 10px;">
                        <div>
                            <span>Next</span>
                            <p>The React Framework</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <style>
            @keyframes scroll {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-100%);
                }
            }

            .stats-slider:hover {
                animation-play-state: paused;
            }

            .stats-slider {
                display: inline-flex;
                animation: scroll 15s linear infinite;
            }

            .stats-item:hover {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
        </style>

        <script>
            function pauseAnimation(element) {
                const slider = element.closest('.stats-slider');
                slider.style.animationPlayState = 'paused';
            }

            function resumeAnimation(element) {
                const slider = element.closest('.stats-slider');
                slider.style.animationPlayState = 'running';
            }
        </script>




        <!-- Values Section -->
        <section id="values" class="values section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                {{-- <h2>E-BOOK</h2> --}}
                <p>E-BOOK</p>
                <h5>Daftar ebook dengan pembahasan studi kasus yang akan menuntunmu menjadi seorang Full-Stack Developer
                    Expert</h5>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="{{ asset('assets/img/ebook/book1.jpeg') }}" class="img-fluid" alt="">
                            <h5>Membangun Website dan Aplikasi Android Desa Dengan Laravel, React.js dan React Native
                            </h5>
                            <p class="text-success" style="animation: pulse 1s infinite;">Diskon: 20%</p>
                            <p>Harga: <span class="text-muted"><del>Rp200.000</del></span> <span
                                    class="text-danger">Rp160.000</span></p>
                            <p>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-muted"></i> (4/5)
                            </p>
                            <p><i class="bi bi-people-fill"></i> 1500+</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="{{ asset('assets/img/ebook/book2.jpeg') }}" class="img-fluid" alt="">
                            <h5>FullStack JavaScript Developer: Membangun Aplikasi Kasir (POS) Dengan Express dan React
                            </h5>
                            <p class="text-success" style="animation: pulse 1s infinite;">Diskon: 25%</p>
                            <p>Harga: <span class="text-muted"><del>Rp250.000</del></span> <span
                                    class="text-danger">Rp187.500</span></p>
                            <p>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i> (5/5)
                            </p>
                            <p><i class="bi bi-people-fill"></i> 2000+</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="{{ asset('assets/img/ebook/book3.jpeg') }}" class="img-fluid" alt="">
                            <h5>Belajar Zero Downtime Laravel Deployment Dengan Envoy dan GitHub Actions</h5>
                            <p class="text-success" style="animation: pulse 1s infinite;">Diskon: 15%</p>
                            <p>Harga: <span class="text-muted"><del>Rp150.000</del></span> <span
                                    class="text-danger">Rp127.500</span></p>
                            <p>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i> (5/5)
                            </p>
                            <p><i class="bi bi-people-fill"></i> 1800+</p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

            <style>
                @keyframes pulse {
                    0% {
                        transform: scale(1);
                        opacity: 1;
                    }

                    50% {
                        transform: scale(1.05);
                        opacity: 0.8;
                    }

                    100% {
                        transform: scale(1);
                        opacity: 1;
                    }
                }
            </style>


        </section><!-- /Values Section -->




        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>TELAH DIPERCAYA</h2> <br>
                <h6>Berikut ini adalah daftar universitas dan perusahaan yang telah bergabung dan belajar di Sabar
                    Ngoding.<br></h6>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Clients Section -->




<!-- Artikel Section -->
<section id="articles" class="articles section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <p>ARTIKEL</p>
        <h5>Baca dan pelajari artikel yang disusun secara terstrukur dan sistematis untuk mempermudah kamu belajar coding</h5>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="article-item item-cyan position-relative">
                    <img src="{{ asset('assets/img/artikel/artikel1.png') }}" class="img-fluid" alt="Artikel 1">
                    <h5>Membangun Website dan Aplikasi Android Desa Dengan Laravel, React.js dan React Native</h5>
                    <p>
                        <span class="badge bg-primary">Laravel</span>
                        <span class="badge bg-success">React.js</span>
                        <span class="badge bg-info">Tailwind</span>
                        <span class="badge bg-warning">Inertia</span>
                    </p>
                    <div class="author-info d-flex align-items-center">
                        <img src="{{ asset('assets/img/iconpenulis.png') }}" class="rounded-circle me-2" alt="Foto Penulis" width="40" height="40">
                        <span><strong>M. Sabarudin</strong></span>
                    </div>
                </div>
            </div><!-- End Article Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="article-item item-cyan position-relative">
                    <img src="{{ asset('assets/img/artikel/artikel2.png') }}" class="img-fluid" alt="Artikel 2">
                    <h5>Panduan Lengkap Membuat Dashboard Modern dengan Laravel dan Inertia.js</h5>
                    <p>
                        <span class="badge bg-primary">Laravel</span>
                        <span class="badge bg-success">React.js</span>
                        <span class="badge bg-info">Tailwind</span>
                        <span class="badge bg-warning">Inertia</span>
                    </p>
                    <div class="author-info d-flex align-items-center">
                        <img src="{{ asset('assets/img/iconpenulis.png') }}" class="rounded-circle me-2" alt="Foto Penulis" width="40" height="40">
                        <span><strong>M. Sabarudin</strong></span>
                    </div>
                </div>
            </div><!-- End Article Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="article-item item-cyan position-relative">
                    <img src="{{ asset('assets/img/artikel/artikel3.png') }}" class="img-fluid" alt="Artikel 3">
                    <h5>Strategi Efektif Belajar Coding dengan Proyek Nyata</h5>
                    <p>
                        <span class="badge bg-primary">Laravel</span>
                        <span class="badge bg-success">React.js</span>
                        <span class="badge bg-info">Tailwind</span>
                        <span class="badge bg-warning">Inertia</span>
                    </p>
                    <div class="author-info d-flex align-items-center">
                        <img src="{{ asset('assets/img/iconpenulis.png') }}" class="rounded-circle me-2" alt="Foto Penulis" width="40" height="40">
                        <span><strong>M. Sabarudin</strong></span>
                    </div>
                </div>
            </div><!-- End Article Item -->

        </div>

    </div>

</section><!-- /Articles Section -->





    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/logo/LOGO SABAR NGODING revisi.png') }}" alt=""
                            height="50">
                        <span class="sitename">SabarNgoding</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>PT. Santri Akademi Digital</p>
                        <p>Perum Kurnia Asri 2 Blok D3, Kec. Diwek, Kab. Jombang Jawa Timur 61471</p>
                        {{-- <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p> --}}
                    </div>
                    <br>
                    <div class="col-lg-2 col-md-6">
                        <div class="social-links d-flex">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>COMPANY</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Tentang Kami</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Help Center</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Press Kit</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Syarat Layanan</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>BELAJAR</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Artikel</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">eBook</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">eBook Bundles</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Subscriptions</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Kelas Online</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>KOMUNITAS</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Ulasan Members</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Stuck Over</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Leaderboard</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Cek Sertifikat</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Group Telegram</a></li>
                    </ul>
                </div>


            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© 2024 <span>Copyright</span> <strong class="px-1 sitename">SabarNgoding</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
            </div>
        </div>

    </footer>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
