@extends('layouts.app_nofh')

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

                @include('menus.firstmenu_page')

                </div>
            </div>
        </section><!-- End Menu Section -->
    </main><!-- End #main -->
</div>

<!-- END container -->
@endsection