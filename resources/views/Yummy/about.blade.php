@extends('Yummy.master')
@section('content')
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About Us<br></h2>
            <p><span>Learn More</span> <span class="description-title">About Us</span></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('Yummy/assets/img/about.jpg') }}" class="img-fluid mb-4" alt="">
                    <div class="book-a-table">
                        <h3>Book a Table</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Duis aute irure dolor in
                                    reprehenderit in voluptate velit.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident
                        </p>

                        <div class="position-relative mt-4">
                            <img src="{{ asset('Yummy/assets/img/about-2.jpg') }}" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section light-background">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-box">
                        <h3>Why Choose Yummy</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus
                            optio ad corporis.
                        </p>
                        <div class="text-center">
                            <a href="#" class="more-btn"><span>Learn More</span> <i
                                    class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Why Box -->

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-xl-4">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-clipboard-data"></i>
                                <h4>Corporis voluptates officia eiusmod</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                    aliquip</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-gem"></i>
                                <h4>Ullamco laboris ladore lore pan</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-inboxes"></i>
                                <h4>Labore consequatur incidid dolore</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere
                                </p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Why Us Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

        <img src="{{ asset('Yummy/assets/img/stats-bg.jpg') }}" alt="" data-aos="fade-in">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clients</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Workers</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->













@endsection
