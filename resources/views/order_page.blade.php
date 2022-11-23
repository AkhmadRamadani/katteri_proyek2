@extends('layouts.app')

@section('container')
<div id="container">
    <style>
    .card {
        height: 400px;
        width: 239px;
        position: relative;
        margin: 15px;
        padding-left: 0;
        padding-right: 0;
        display: flex;
        border-radius: 10px;
    }

    input[type="radio"] {
        -webkit-appearance: none;
        appearance: none;
        background-color: white;
        height: 100%;
        width: 100%;
        border-radius: 10px;
        /* position: absolute; */
        box-shadow: 7px 7px 15px rgba(2, 28, 53, 0.08);
        cursor: pointer;
        outline: none;
    }

    input[type="radio"]:before {
        content: "";
        position: absolute;
        height: 22px;
        width: 22px;
        background-color: #f9fafd;
        border: 1px solid #e2e6f3;
        border-radius: 50%;
        top: 26px;
        right: 20px;
    }

    input[type="radio"]:after {
        content: "";
        position: absolute;
        height: 13px;
        width: 13px;
        background-color: transparent;
        border-radius: 50%;
        top: 30px;
        right: 24.5px;
    }

    label {
        position: absolute;
        margin: 20px;
        cursor: pointer;
    }

    h5 {
        font-weight: 600;
        font-size: 16px;
        letter-spacing: 0.5px;
        margin: 15px 0 20px 0;
    }

    h2 {
        font-size: 20px;
    }

    span {
        font-weight: 400;
        font-size: 16px;
        color: #7b7b93;
    }

    input[type="radio"]:checked {
        border: 3px solid #ec2727;
    }

    input[type="radio"]:checked:after {
        background-color: #ec2727;
    }
    </style>
    <main id="main">
        <!-- ======= Order Section Section ======= -->
        <section id="book-a-table" class="book-a-table" style="background-color: #eee;">
            <div class="container" data-aos="fade-up">
                <div class="section-header" style="padding: 20px;">
                    <p style="font-size: 50px; font-weight: bold">Go <span
                            style="font-size: 50px; font-weight: bold">Order </span>Our Menu!</p>
                </div>

                <div class="row g-0">
                    <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);"
                        data-aos="zoom-out" data-aos-delay="200"></div>
                    <div class="col-lg-8 align-items-center reservation-form-bg">
                        <form action="#" method="post" role="form" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="row gy-4">
                                <div class="col-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama"
                                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-6">
                                    <input type="number" class="form-control" name="kodepos" id="kodepos"
                                        placeholder="Kode Pos" data-rule="minlen:5"
                                        data-msg="Please enter at least 5 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="alamat" rows="5"
                                        placeholder="Alamat"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="col-6">
                                    <input type="number" class="form-control" name="notelp1" id="notelp1"
                                        placeholder="No. Telp 1" data-rule="minlen:12"
                                        data-msg="Please enter at least 5 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="notelp2" id="notelp2"
                                        placeholder="No. Telp 2" data-rule="minlen:12"
                                        data-msg="Please enter at least 5 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="card">
                                    <input type="radio" name="pricing" id="card1">
                                    <label for="card1">
                                        <br><br>
                                        <img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""
                                            style="margin-bottom: 10px;">
                                        <h5>Weight Loss Package</h5>
                                        <h2>
                                            <span>Rp. </span>
                                            800.000,-
                                        </h2>
                                    </label>
                                </div>
                                <div class="card">
                                    <input type="radio" name="pricing" id="card2" checked>
                                    <label for="card2">
                                        <br><br>
                                        <img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""
                                            style="margin-bottom: 10px;">
                                        <h5>Healthy Food Package</h5>
                                        <h2>
                                            <span>Rp. </span>
                                            800.000,-
                                        </h2>
                                    </label>
                                </div>
                                <div class="card">
                                    <input type="radio" name="pricing" id="card3">
                                    <label for="card3">
                                        <br><br>
                                        <img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""
                                            style="margin-bottom: 10px;">
                                        <h5>Normal Food Package</h5>
                                        <h2>
                                            <span>Rp. </span>
                                            800.000,-
                                        </h2>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your booking request was sent. We will call back or send an
                                    Email to confirm your reservation. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Book a Table</button></div>
                        </form>
                    </div><!-- End Reservation Form -->
                </div>
            </div>
        </section><!-- End Book A Table Section -->
    </main><!-- End #main -->
</div>

<!-- END container -->
@endsection