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

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-weightloss">
                            <h4>Weight Loss</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-healthy">
                            <h4>Healthy Food</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-normal">
                            <h4>Normal Food</h4>
                        </a>
                    </li><!-- End tab nav item -->
                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-weightloss">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Weight Loss Package</h3>
                        </div>

                        <div class="tab-header" style="
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
                            <p style="text-transform : none; margin-bottom : 20px">Lorem Ipsum is simply dummy text of
                                the printing and
                                typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <li>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </li>
                        </div>

                        @include('menus.menupart_page')
                    </div><!-- End Weight Loss Menu Content -->

                    <div class="tab-pane fade" id="menu-healthy">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Healthy Food Package</h3>
                        </div>

                        <div class="tab-header" style="
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
                            <p style="text-transform : none; margin-bottom : 20px">Lorem Ipsum is simply dummy text of
                                the printing and
                                typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <li>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </li>
                        </div>

                        @include('menus.menupart_page')
                    </div><!-- End Healthy Menu Content -->

                    <div class="tab-pane fade" id="menu-normal">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Normal Food Package</h3>
                        </div>

                        <div class="tab-header" style="
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
                            <p style="text-transform : none; margin-bottom : 20px">Lorem Ipsum is simply dummy text of
                                the printing and
                                typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <li>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. </li>
                        </div>

                        @include('menus.menupart_page')
                    </div><!-- End Normal Food Menu Content -->
                </div>
            </div>
        </section><!-- End Menu Section -->

        <!-- ======= Banner Section ======= -->
        <section id="chefs" class="chefs section-bg" style="padding: 10px 0;">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex flex-column justify-content-center align-items-center">

                    <center>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="#" class="btn-book-a-table">Book Now!</a>
                        </div>
                    </center>

                </div>

            </div>
        </section><!-- End Banner Section -->
    </main><!-- End #main -->
</div>

<!-- END container -->
@endsection