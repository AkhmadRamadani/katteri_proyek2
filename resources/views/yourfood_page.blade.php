@extends('layouts.app')

@section('container')
    @if ($subscribe != null)
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
                            <p>This Is <span>Your Food</span></p>
                        </div>

                        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                            <div class="tab-pane fade active show" id="menu-weightloss">

                                <div class="tab-header text-center" style="padding-bottom: 0;">
                                    <p>Menu</p>
                                    <h3> {{ $subscribe->paket->nama_paket }} </h3>
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
                                        {{ $subscribe->paket->deskripsi }}
                                    </p>
                                </div>
                                <div class="container-fluid mt--7">
                                    <div class="row">
                                        <div class="col-xl-12 order-xl-1">
                                            <div class="card"
                                                style="background-color: white;
                                                                border-radius: 25px; 
                                                                border: 0;
                                                                padding: 30px">
                                                <div class="card-header"
                                                    style="background-color: white;
                                                                border-radius: 25px; 
                                                                border: 0">
                                                    <div>
                                                        <h5 class="mb-0 text-center">Food Delivery</h5>
                                                    </div>
                                                    <hr class="my-4">
                                                </div>
                                                <div class="card-body">
                                                    <!-- Senin -->
                                                    @foreach ($subscribe->paket->jadwal_makanan as $makanan)
                                                        @foreach ($makanan as $menus)
                                                            <h5
                                                                style="font-size: 25px;
                                                                font-weight: 600;
                                                                color: var(--color-primary);">
                                                                {{ $menus[0]->hari->nama_hari }}
                                                            </h5>

                                                            <div class="pl-lg-4">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!-- Menu 1 -->
                                                                        @foreach ($menus as $item)
                                                                            <div class="form-group focused"
                                                                                style="background-color: white; padding: 20px; border-radius: 20px; display: flex; 
                                                                                align-items: center;
                                                                                justify-content: center;">
                                                                                <img src="{{ Storage::disk('s3')->temporaryUrl( $item->menu->foto, '+2 minutes')  }}"
                                                                                    class="menu-img img-fluid"
                                                                                    alt=""
                                                                                    style="width: 150px; height: 150px; margin-right: 30px">
                                                                                <div>
                                                                                    <h5>{{$item->menu->nama_menu}}</h5>
                                                                                    {{-- <h6 style="color: grey;">
                                                                                        Date : 10 November 2022
                                                                                    </h6> --}}
                                                                                    <p>
                                                                                        {{$item->menu->deskripsi}}
                                                                                    </p>
                                                                                    {{-- <h6 style="color: Green;">
                                                                                        Delivered
                                                                                    </h6> --}}
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <hr class="my-4">
                                                        @endforeach
                                                    @endforeach



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Weight Loss Menu Content -->
                        </div>
                    </div>
                </section><!-- End Menu Section -->
            </main><!-- End #main -->
        </div>
    @else
        <section id="chefs" class="chefs section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex flex-column justify-content-center align-items-center"
                    style="padding-top: 10%; padding-bottom: 10%;">
                    <p style="font-size: 100px; font-weight: bold">
                        <span style="font-size: 100px; font-weight: bold">
                            Oops!
                        </span>
                        Kamu belum berlangganan!
                    </p>
                    <br>
                    <h2 style="color: black;">Mulai kebiasaan meal planning dengan Katteri, urusan makanan tiap hari
                        jadi tidak memusingkan lagi.</h2>
                    <br>
                    <center>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200" style="padding-top: 10px;">
                            <a href="{{ url('/order') }}" class="btn-book-a-table">Book Now!</a>
                        </div>
                    </center>

                </div>

            </div>
        </section>
    @endif
    {{-- <p>
        {{
            $subscribe
        
        }}
    </p> --}}


    <!-- END container -->
@endsection
