@extends('layouts.app')

@section('container')
<section id="menu" class="menu" style="background-color: #eee; padding : 50px 0">
    <style>
    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        background-color: #eee;
    }
    </style>
    <div class="container" data-aos="fade-up">
        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            <div class="section-header" style="padding-top: 50px;">
                <p>Choose Your <span>Payment </span> Method !</p>
            </div>
            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#qris">
                        <h4>QRIS</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#transfer">
                        <h4>Transfer</h4>
                    </a><!-- End tab nav item -->
                </li>
                <!-- End tab nav item -->
            </ul>

            <div class="tab-pane fade active show" id="qris">
                <div class="container py-3">
                    <div class="row">
                        <div class="col-12 col-sm-8 col-md-6 mx-auto">
                            <div id="pay-invoice" class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4 class="text-center">Payment Invoice</h4>
                                    </div>
                                    <hr>
                                    <form action="" method="post" novalidate="novalidate">
                                        <div class="form-group" style="margin-bottom: 15px;">
                                            <label>Jumlah Pembayaran :</label>
                                            <h5>@money($payment->tagihan)</h5>
                                        </div>
                                        <div class="form-group" style="margin-bottom: 15px;">
                                            <label>Metode Pembayaran :</label>
                                            <h5>QRIS</h5>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-name" class="control-label">QRIS :</label>
                                        </div>
                                        <div class="form-group"
                                            style="margin-bottom: 15px; display: flex; justify-content: center;">
                                            <img src="{{ asset('assets\img\qris-example.jpg')}}" style="width: 300px;">
                                        </div>

                                        <div class="form-group" style="margin-bottom: 15px;">
                                            <label for="x_zip" class="control-label">Upload Bukti Pembayaran</label>
                                        </div>
                                        <div class="form-group" style="margin-bottom: 15px;">
                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                        </div>

                                        <div style="display: flex; justify-content: center; padding-bottom: 20px;">
                                            <button id="payment-button" type="submit"
                                                class="btn btn-lg btn-success btn-block"
                                                style="border-radius: 40px; height:max-content;">
                                                <span id="payment-button-amount" style="font-size: 15px;">Bayar
                                                    Sekarang</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End QRIS Content -->

            <div class="tab-pane fade" id="transfer">
                <div class="container py-3">
                    <div class="row">
                        <div class="col-12 col-sm-8 col-md-6 mx-auto">
                            <div id="pay-invoice" class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4 class="text-center">Payment Invoice</h4>
                                    </div>
                                    <hr>
                                    <form action="{{ route('payment.store') }}" method="post" novalidate="novalidate" accept="">
                                        @csrf
                                        <div class="form-group" style="margin-bottom: 15px;">
                                            <label>Jumlah Pembayaran :</label>
                                            <h5>@money($payment->tagihan)</h5>
                                        </div>
                                        <div class="form-group" style="margin-bottom: 15px;">
                                            <label>Metode Pembayaran :</label>
                                            <h5>Transfer</h5>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-name" class="control-label">Bank Information :</label>
                                        </div>
                                        <div class="form-group"
                                            style="margin-bottom: 15px; display: flex; justify-content: center;">
                                            <img src="{{asset('assets\img\transfer.png')}}" style="width: 400px;">
                                        </div>

                                        <div class="form-group" style="margin-bottom: 15px;">
                                            <label for="x_zip" class="control-label">Upload Bukti Pembayaran</label>
                                        </div>
                                        <div class="form-group" style="margin-bottom: 15px;">
                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                        </div>

                                        <div style="display: flex; justify-content: center; padding-bottom: 20px;">
                                            <button id="payment-button" type="submit"
                                                class="btn btn-lg btn-success btn-block"
                                                style="border-radius: 40px; height:max-content;">
                                                <span id="payment-button-amount" style="font-size: 15px;">Bayar
                                                    Sekarang</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Transfer Content -->
        </div>
    </div>
</section><!-- End Menu Section -->
<!-- END container -->
@endsection