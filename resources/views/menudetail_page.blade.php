@extends('layouts.app')

@section('container')
    <div id="container">
        <style>
            .nav-tabs .nav-item.show .nav-link,
            .nav-tabs .nav-link.active {
                background-color: #eee;
            }
        </style>
        <main id="main">
            <!-- ======= Menu Section ======= -->
            <section id="menu" class="menu" style="background-color: #eee; padding-top : 0">
                <div class="container" data-aos="fade-up">

                    <div class="section-header" style="padding: 80px 50px 0px 50px">
                        <p>Detail <span>Menu !</span></p>
                    </div>

                    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                        <div class="receipe-post-area section-padding-80">
                            <style>
                                h4 {
                                    margin-right: 10px;
                                }
                            </style>
                            <!-- Receipe Content Area -->
                            <div class="receipe-content-area">
                                <div class="container" style="margin-top: 20px">
                                    <div class="row"
                                        style="background-color: white; padding:30px; border-radius: 25px; 
                                                    margin-bottom:60px;">
                                        <div class="col-12 col-md-8"
                                            style="align-content: center; justify-content: center; display: grid;">
                                            <div class="receipe-headline text-center my-5">
                                                <h2>{{ $menu->nama_menu }}</h2>
                                                <div class="receipe-duration">
                                                    <p>{{ $menu->deskripsi }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="receipe-ratings text-center my-5">
                                                <a href="{{ asset('storage/'.$menu->foto) }}" class="glightbox"><img
                                                        src="{{ asset('storage/'.$menu->foto) }}" class="menu-img img-fluid"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 60px;">
                                        <div class="col-12 col-lg-8">
                                            <!-- Single Preparation Step -->
                                            

                                        <!-- Ingredients -->
                                        <div class="col-12 col-lg-4">
                                            <div class="ingredients">
                                                <h4>Nutritional Facts</h4>

                                                <!-- Custom Checkbox -->
                                                <div class="custom-control custom-checkbox">
                                                    {!! $menu->nutrition_facts !!}
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section><!-- End Menu Section -->
        </main><!-- End #main -->
    </div>

    <!-- END container -->
@endsection
