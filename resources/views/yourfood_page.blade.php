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
                    <p>This Is <span>Your Food</span></p>
                </div>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-weightloss">

                        <div class="tab-header text-center" style="padding-bottom: 0;">
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

                        @include('menus.ongoingmenu_page')
                    </div><!-- End Weight Loss Menu Content -->
                </div>
            </div>
        </section><!-- End Menu Section -->
    </main><!-- End #main -->
</div>

<!-- END container -->
@endsection