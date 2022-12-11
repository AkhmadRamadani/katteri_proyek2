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
            <section id="menu" class="menu" style="background-color: #eee; padding : 50px 0">
                <div class="container" data-aos="fade-up">

                    <div class="section-header" style="padding: 50px;">
                        <p>Check Our <span>Yummy Menu</span></p>
                    </div>
                    <div class="tabpanel">


                        <!-- Tab panes -->
                        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200"
                            role="tablist">
                            @foreach ($paket as $count => $item)
                                <li class="nav-item" role="presentation">
                                    <a href="#{{ $item->id }}" aria-controls="{{ $item->id }}"
                                        @if (app('request')->input('tab') != null) @if ($item->id == app('request')->input('tab')) class="nav-link active" 
                                            @else class="nav-link" @endif
                                    @else
                                        @if ($count == 0) class="nav-link active" @else class="nav-link" @endif
                                        @endif
                                        role="tab" data-toggle="tab">
                                        <h4>{{ $item->nama_paket }}</h4>
                                    </a>
                                </li><!-- End tab nav item -->
                            @endforeach

                        </ul>

                        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                            @foreach ($paket as $count => $item)
                                <div @if (app('request')->input('tab') != null) @if ($item->id == app('request')->input('tab')) class="tab-pane fade active show" @else class="tab-pane fade" @endif
                                @else
                                    @if ($count == 0) class="tab-pane fade active show" @else class="tab-pane fade" @endif
                                    @endif
                                    id="{{ $item->id }}" role="tabpanel">

                                    <div class="tab-header text-center">
                                        <p>Menu</p>
                                        <h3>{{ $item->nama_paket }}</h3>
                                    </div>

                                    <div class="tab-header"
                                        style="
                                    background-color: white;
                                    border-radius: 25px; 
                                    margin-bottom:30px;
                                    padding : 30px
                                ">
                                        <style>
                                            li {
                                                font-size: 14px;
                                                color: #676775;
                                            }
                                        </style>
                                        <h5 class="text-center">Information</h5>
                                        <p style="text-transform : none; margin-bottom : 20px">
                                            {{ $item->deskripsi }}
                                        </p>
                                    </div>

                                    <!-- Menu List -->
                                    <div class="row row-5">
                                        @foreach ($item->jadwal_makanan as $menu)
                                            <div class="col menu-item">
                                                @foreach ($menu as $makanan)
                                                    <a data-toggle="modal"
                                                        data-target="#detailModal{{ $makanan->id }}"><img
                                                            src="{{ asset('storage/'.$makanan->menu->foto) }}" class="menu-img img-fluid"
                                                            alt=""></a>
                                                    <h4>{{ Str::limit($makanan->menu->nama_menu, 12) }}</h4>
                                                    <p class="ingredients">
                                                        {{ Str::limit($makanan->menu->deskripsi, 20) }}
                                                    </p>
                                                    {{-- @if (count($menu) > 1) --}}
                                                    <p class="price">
                                                        {{ $makanan->hari->nama_hari }}
                                                    </p>
                                                    {{-- @endif --}}
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>



                                </div><!-- End Weight Loss Menu Content -->
                            @endforeach
                        </div>

                    </div>
                    {{--  --}}

                </div>
            </section><!-- End Menu Section -->

            <!-- ======= Banner Section ======= -->
            <section id="chefs" class="chefs section-bg" style="padding: 10px 0;">
                <div class="container" data-aos="fade-up">

                    <div class="section-header d-flex flex-column justify-content-center align-items-center">

                        <center>
                            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                <a href="{{ url('order') }}" class="btn-book-a-table">Book Now!</a>
                            </div>
                        </center>

                    </div>

                </div>
            </section><!-- End Banner Section -->
            @foreach ($paket as $count => $item)
                @foreach ($item->jadwal_makanan as $menu)
                    @foreach ($menu as $makanan)
                        <div class="modal fade bd-example-modal-lg" id="detailModal{{ $makanan->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="detailModal{{ $makanan->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div id="container">
                                        <style>
                                            .nav-tabs .nav-item.show .nav-link,
                                            .nav-tabs .nav-link.active {
                                                background-color: #eee;
                                            }
                                        </style>
                                        <main id="main">
                                            <!-- ======= Menu Section ======= -->
                                            <section id="menu" class="menu"
                                                style="background-color: #eee; padding-top : 0">
                                                <div class="container" data-aos="fade-up">

                                                    <div class="section-header" style="padding: 80px 50px 0px 50px">
                                                        <p>Detail <span>Menu !!</span>
                                                        </p>
                                                    </div>

                                                    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                                                        <!-- Menu Detail -->
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
                                                                        style="background-color: white; padding:30px; border-radius: 25px; margin-bottom:60px;">
                                                                        <div class="col-12 col-md-8"
                                                                            style="align-content: center; justify-content: center; display: grid;">
                                                                            <div class="receipe-headline text-center my-5">
                                                                                <h2>{{ $makanan->menu->nama_menu }}</h2>
                                                                                {{-- <div class="receipe-duration">
                                                                                    <h6>Prep: 15 mins</h6>
                                                                                    <h6>Cook: 30 mins</h6>
                                                                                    <h6>Yields: 8 Servings</h6>
                                                                                </div> --}}
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 col-md-4">
                                                                            <div class="receipe-ratings text-center my-5">
                                                                                <a href="assets/img/menu/menu-item-2.png"
                                                                                    class="glightbox"><img
                                                                                        src="{{ asset('storage/'.$makanan->menu->foto) }}"
                                                                                        class="menu-img img-fluid"
                                                                                        alt=""></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row" style="margin-bottom: 60px;">
                                                                        <div class="col-12 col-lg-6">
                                                                            <!-- Single Preparation Step -->
                                                                            <div class="single-preparation-step d-flex">
                                                                                {{-- <h4>01.</h4> --}}
                                                                                <p>{{ $makanan->menu->deskripsi }} </p>
                                                                            </div>
                                                                          
                                                                        </div>

                                                                        <!-- Ingredients -->
                                                                        <div class="col-12 col-lg-6">
                                                                            <div class="ingredients">
                                                                                <h4>Nutritional Facts</h4>

                                                                               {!!
                                                                                $makanan->menu->nutrition_facts
                                                                                
                                                                               !!}

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
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            @endforeach

        </main><!-- End #main -->
    </div>

    <!-- END container -->
@endsection
