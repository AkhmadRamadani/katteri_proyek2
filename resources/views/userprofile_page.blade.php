@extends('layouts.app')

@section('container')
    <div id="container">
        <link rel="stylesheet" href="assets/css/profile.css">

        <div class="main-content">
            <!-- Header -->
            <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
                style="min-height: 600px; background-size: cover; background-position: center top;">
                <!-- Mask -->
                <span class="mask bg-gradient-default opacity-8"></span>
                <!-- Header container -->
                <div class="container-fluid d-flex align-items-center">
                    <div class="row">
                        <div class="col-lg-7 col-md-10">
                            <h1 class="display-2 text-white">Hello {{ $user->name }}</h1>
                            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made
                                with your work and manage your projects or assigned tasks</p>
                            <a href="/your-food" class="btn btn-info">See Your Food</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            {{-- [] --}}
            @if (count($subscribe) > 0)
                <div class="container-fluid mt--7" style="padding-top: 150px;">
                    <div class="row">
                        <div class="col-xl-12 order-xl-1">
                            <div class="card bg-secondary shadow">
                                <div class="card-header bg-white border-0">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="mb-0">Your Transaction</h3>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#!" class="btn btn-sm btn-primary">Katteri.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    @foreach ($subscribe as $count => $item)
                                        <h6 class="heading-small text-muted mb-4">Transaction {{ $count + 1 }}</h6>
                                        <div class="pl-lg-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group focused"
                                                        style="background-color: white; padding: 20px; border-radius: 20px; display: flex">
                                                        <img src="{{ Storage::disk('s3')->temporaryUrl($item->paket->foto, '+2 minutes') }}"
                                                            class="menu-img img-fluid" alt=""
                                                            style="width: 250px; margin-right: 30px">
                                                        <div>
                                                            <h1>{{ $item->paket->nama_paket }}</h1>
                                                            <h3 style="color: grey;">
                                                                {{ \Carbon\Carbon::parse($item->created_at)->format('l, jS \\of F Y') }}
                                                            </h3>
                                                            </h3>
                                                            <p>
                                                                {{ $item->paket->deskripsi }}
                                                            </p>
                                                            <h3 style="color: red;">
                                                                @money($item->paket->harga_paket)
                                                            </h3>
                                                            @if ($item->payment->status == 0)
                                                                <div class="container px-0">
                                                                    <div class="row">
                                                                        <div class="col-10">

                                                                            <h3 style="color: red;">
                                                                                Status : Menunggu Pembayaran
                                                                            </h3>
                                                                        </div>
                                                                        <div class="col-2">

                                                                            <a href="{{ url('/payment') }}/{{ $item->id }}"
                                                                                class="btn btn-info btn-md">Bayar
                                                                                Sekarang</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @elseif($item->payment->status == 1)
                                                                <h3 style="color: orange;">
                                                                    Status : Menunggu Konfirmasi Admin
                                                                </h3>
                                                            @else
                                                                <h3 style="color: green;">
                                                                    Status : Berhasil
                                                                </h3>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Food 2 -->
                                        <hr class="my-4">
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="container-fluid mt--7" style="padding-top: 150px; margin-bottom:80px">
                    <div class="row">
                        <div class="col-xl-12 order-xl-1">
                            <div class="card bg-secondary shadow">
                                <div class="card-header bg-white border-0">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="mb-0">Your Transaction</h3>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#!" class="btn btn-sm btn-primary">Katteri.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group focused"
                                                    style="background-color: white; padding: 20px; border-radius: 20px; display: flex">
                                                    <div>
                                                        <h1>Belum ada riwayat transaksi.</h1>
                                                        <a href="{{ url('/order') }}" class="btn btn-info">Book Now!</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif



        </div>
    </div>

    <!-- END container -->
@endsection
