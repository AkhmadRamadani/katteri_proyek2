@extends('admin.index')
@section('content')
    <!-- content @s
        -->
        <div class="nk-content " style="padding: 0">
            <div class="container">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Packages</h3>
                                    <p>Package Page in Katteri App.</p>
                                </div><!-- .nk-block-head-content -->
                                <div class="nk-block-head-content">
                                    <div class="toggle-wrap nk-block-tools-toggle">
                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                            data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                        <div class="toggle-expand-content" data-content="pageMenu">
                                            <ul class="nk-block-tools g-3">
                                                <li>
                                                    <div class="form-control-wrap">
                                                        <div class="form-icon form-icon-right">
                                                            <em class="icon ni ni-search"></em>
                                                        </div>
                                                        <form class="form-inline" action="{{ route('paket.index') }}">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Search"
                                                                    name="search">
                                                            </div>
                                                            <div class="mx-1">
                                                                <button type="submit" class="btn btn-primary">Search</button>

                                                            </div>
                                                        </form>


                                                    </div>
                                                </li>
                                                <li class="nk-block-tools-opt">
                                                    <a href="#" data-target="addProduct"
                                                        class="toggle btn btn-icon btn-primary d-md-none"><em
                                                            class="icon ni ni-plus"></em></a>
                                                    <a href="#" data-target="addProduct"
                                                        class="toggle btn btn-primary d-none d-md-inline-flex"><em
                                                            class="icon ni ni-plus"></em><span>Add Package</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="row g-gs">
                                @foreach ($packages as $item)
                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                        <div class="card card-bordered product-card">
                                            <div class="product-thumb">
                                                <a href="{{ route('paket.show', $item->id) }}">
                                                    <img class="card-img-top" src="{{ asset('storage/' . $item->foto) }}"
                                                        alt="" style="padding: 40px">
                                                </a>
                                            </div>
                                            <div class="card-inner text-center">
                                                <ul class="product-tags">
                                                    <li><a href="{{ route('paket.show', $item->id) }}">Package</a></li>
                                                </ul>
                                                <h5 class="product-title"><a href="{{ route('paket.show', $item->id) }}">{{ $item->nama_paket }}</a>
                                                </h5>
                                                <div class="product-price text-primary h5"> @money($item->harga_paket)</div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                @endforeach


                            </div>
                        </div><!-- .nk-block -->
                        <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct"
                            data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">New Package</h5>
                                    <div class="nk-block-des">
                                        <p>Add information and add new package.</p>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <form action="{{ route('paket.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="product-title">Package Title</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="product-title" name="nama_paket">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="description">Description</label>
                                                <div class="form-control-wrap" style="height: 150px;">
                                                    <textarea type="text" class="form-control" id="description" name="deskripsi_paket"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="product-title">Price</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="product-title" name="harga_paket">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="product-title">Price</label>
                                                <div class="form-control-wrap">
                                                    <input type="file" class="form-control" id="product-title" name="foto">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                                                    New</span></button>
                                        </div>
                                    </div>
                                </form>

                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->
    @endsection
