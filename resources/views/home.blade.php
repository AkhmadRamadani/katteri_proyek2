@extends('layouts.app')

@section('container')
<div id="container">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Food Delivery<br>Without Worry</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Sering dipusingkan dengan urusan makanan tiap hari? Mulai
                        kebiasaan meal planning dengan Katteri, bisa pesan makanan untuk semua kebutuhan dari jauh-jauh
                        hari.</p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        @if (Auth::guest())
                        <a href="{{ url('login') }}" class="btn-book-a-table">Book Now!</a>
                        @else
                        <a href="{{ url('order') }}" class="btn-book-a-table">Book Now!</a>
                        @endif
                        <a href="{{ url('menu-list') }}" class="btn d-flex align-items-center"><span>See Our
                                Menu</span></a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="300">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Kenapa Harus Katteri Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <p>Kenapa Harus <span>Katteri </span>?</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img"
                        style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Bayangkan kamu tak perlu lagi repot memikirkan menu makan harian, bekal untuk bekerja, hingga
                                urusan makan di mana saja. Perut tetap kenyang, pikiran tenang, dan seperti punya waktu
                                luang tambahan. Itulah yang kamu rasakan ketika mencoba Katteri. Di Katteri, kamu tidak
                                hanya sekedar pesan makanan bergizi seimbang, tapi juga bisa meal planning untuk
                                beberapa hari ke depan dengan berbagai macam pilihan paket makanan.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Bebas repot urusan makan, hati pun terasa tenang. </li>
                                <li><i class="bi bi-check2-all"></i> Bye-bye worry! </li>
                                <li><i class="bi bi-check2-all"></i> Tersedia untuk semua kebutuhanmu!. </li>
                            </ul>
                            <p>
                                Mulai kebiasaan meal planning dengan Katteri, urusan makanan tiap hari jadi tidak memusingkan lagi.
                            </p>

                            <div class="position-relative mt-4">
                                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Bye Bye Worry Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <p>Bye-bye<span>Worry !</span></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-12 d-flex align-items-center">
                        <div class="row gy-4">
                            <div class="col-lg-2" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <h4>Khawatir bosan dengan menu ?</h4>
                                    <p>Menu di Katteri sangat beragam. Pilihan menunya diatur tim Food Experience
                                        Katteri yang pastinya akan memanjakan customer.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-2" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <h4>Khawatir harga mahal ?</h4>
                                    <p>Dengan sistem pre-order, Tim Katteri bisa memasak dalam jumlah yang optimal
                                        sehingga harga menjadi lebih rendah. Meskipun lebih murah, tapi kualitas tetap
                                        sama.</p>
                                </div>
                            </div><!-- End Icon Box -->


                            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="why-box d-flex flex-column justify-content-center align-items-center">
                                    <h3>Khawatir kualitas buruk ?</h3>
                                    <p>
                                        Sebelum berjualan, seluruh Tim Katteri sudah diseleksi dengan ketat sehingga
                                        kualitasnya terjamin. Kurasi tidak hanya fasilitas, tapi termasuk kemampuan
                                        manajemen. Bad quality means free!
                                    </p>
                                </div>
                            </div><!-- End Why Box -->

                            <div class="col-xl-2" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <h4>Khawatir tidak flexible ?</h4>
                                    <p>Terdapat pilihan Meal plan yang bisa menyesuaikan pilihan customer dalam waktu
                                        mingguan. Meal Plan beragam menyesuaikan pilihan dari setiap customer.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-2" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <h4>Khawatir ongkir mahal ?</h4>
                                    <p>Katteri punya sistem pengiriman yang diatur dengan algoritma. Pengantaran tidak
                                        satu persatu sehingga bisa mengurangi biaya pengiriman dan waktu pengantaran pun
                                        pasti tepat waktu.</p>
                                </div>
                            </div><!-- End Icon Box -->
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container-fluid" data-aos="fade-up">

                <div class="section-header">
                    <p>Sneak Peak <span>Menu </span>!</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        {{-- loop paket variabel --}}
                        @foreach ($paket as $p)
                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{  Storage::disk('s3')->temporaryUrl( $p->foto, '+2 minutes')  }})">
                            <h3>{{ $p->nama_paket }}</h3>
                            <div class="price align-self-start">@money($p->harga_paket)</div>
                            <p class="description">
                                {{ $p->deskripsi_paket }}
                            </p>
                        </div><!-- End Event item -->
                        @endforeach
                        {{-- end loop paket variabel --}}


                        {{-- <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url(assets/img/events-2.jpg)">
                            <h3>Healthy Food Package</h3>
                            <div class="price align-self-start">Rp. 700.000,-</div>
                            <p class="description">
                                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo
                                vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url(assets/img/events-3.jpg)">
                            <h3>Normal Food Package</h3>
                            <div class="price align-self-start">Rp. 500.000,-</div>
                            <p class="description">
                                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam.
                                Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
                            </p>
                        </div><!-- End Event item --> --}}

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->

        <!-- ======= Banner Section ======= -->
        <section id="chefs" class="chefs section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex flex-column justify-content-center align-items-center"
                    style="padding-top: 10%; padding-bottom: 10%;">
                    <p style="font-size: 100px; font-weight: bold">
                        Coba
                        <span style="font-size: 100px; font-weight: bold">
                            Katteri
                        </span>
                        Sekarang
                    </p>
                    <br>
                    <h2 style="color: black;">Mulai kebiasaan meal planning dengan Katteri, urusan makanan tiap hari
                        jadi tidak memusingkan lagi.</h2>
                    <br>
                    
                    <center>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200" style="padding-top: 10px;">
                            @if (Auth::guest())
                            <a href="{{ url('login') }}" class="btn-book-a-table">Book Now!</a>
                            @else
                            <a href="{{ url('order') }}" class="btn-book-a-table">Book Now!</a>
                            @endif
                        </div>
                    </center>

                </div>

            </div>
        </section><!-- End Banner Section -->
    </main><!-- End #main -->
</div>

<!-- END container -->
@endsection