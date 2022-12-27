@extends('admin.index')
@section('content')
    <!-- content @s
        -->
        <div class="nk-content" style="padding: 0">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Menus</h3>
                                    <p>Menu Page in Katteri App.</p>
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
                                                        <form class="form-inline" action="{{ route('menu.index') }}">
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
                                                            class="icon ni ni-plus"></em><span>Add Menu</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner-group">
                                    <div class="card-inner p-0">
                                        <div class="nk-tb-list">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col tb-col-sm"><span>Name</span></div>
                                                <div class="nk-tb-col"><span>Description</span></div>
                                                <div class="nk-tb-col"><span>Nutrition Facts</span></div>
                                                <div class="nk-tb-col"><span>Actions</span></div>

                                            </div><!-- .nk-tb-item -->
                                            @foreach ($menus as $item)
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="{{ Storage::disk('s3')->temporaryUrl($item->foto, '+2 minutes') }}" alt="asw"
                                                                class="thumb">
                                                            <span class="title">{{ $item->nama_menu }}</span>
                                                        </span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-sub">{{ $item->deskripsi }}</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        {{-- if nutrition facts is null or empty it should be not done --}}
                                                        @if ($item->nutrition_facts == null)
                                                            <span class="tb-lead">Not Done</span>
                                                        @else
                                                            <span class="tb-lead">Done</span>
                                                        @endif
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1 my-n1">
                                                            <li class="mr-n1">
                                                                <div class="dropdown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger"
                                                                        data-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            {{-- Edit product with modal --}}
                                                                            <li><a href="#" data-toggle="modal"
                                                                                    data-target="#updateModal{{ $item->id }}"><em
                                                                                        class="icon ni ni-edit"></em><span>Edit
                                                                                        Product</span></a></li>
                                                                            <li><a href="#" data-toggle="modal"
                                                                                    data-target="#detail{{ $item->id }}">
                                                                                    <em class="icon ni ni-eye"></em><span>View
                                                                                        Product</span></a></li>
                                                                            <li><a href="#" data-toggle="modal"
                                                                                    data-target="#deleteModal{{ $item->id }}"><em
                                                                                        class="icon ni ni-trash"></em><span>Remove
                                                                                        Product</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->

                                                {{-- Delete Modal --}}
                                                <div class="modal fade
                                                @if ($errors->any()) show @endif
                                                "
                                                    tabindex="-1" role="dialog" id="deleteModal{{ $item->id }}">
                                                    <div class="modal-dialog modal-dialog-top modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <a href="#" class="close" data-dismiss="modal"><em
                                                                    class="icon ni ni-cross-sm"></em></a>
                                                            <form action="{{ route('menu.destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Delete Menu</h5>
                                                                </div>
                                                                <div
                                                                    class="modal-body
                                                                @if ($errors->any()) show @endif
                                                                ">
                                                                    <div
                                                                        class="form-group
                                                                    @if ($errors->any()) is-invalid @endif
                                                                    ">
                                                                        <label
                                                                            class="form-label
                                                                        @if ($errors->any()) is-invalid @endif
                                                                        "
                                                                            for="default-01">Are you sure want to delete
                                                                            this menu?</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="default-01" value="{{ $item->nama_menu }}"
                                                                                disabled>
                                                                        </div>
                                                                        @error('nama_menu')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer bg-light">
                                                                    <button type="button" class="btn btn-lg btn-primary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-lg btn-danger">Delete</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>



                                                {{-- Update Modal --}}
                                                <div class="modal fade" tabindex="-1" role="dialog"
                                                    id="updateModal{{ $item->id }}">
                                                    <div class="modal-dialog modal-dialog-top modal-lg" role="document">

                                                        <div class="modal-content">
                                                            <a href="#" class="close" data-dismiss="modal"><em
                                                                    class="icon ni ni-cross-sm"></em></a>
                                                            <form action="{{ route('menu.update', $item->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-header">

                                                                    <h5 class="modal-title">Update Menu</h5>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="row g-4">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label"
                                                                                    for="full-name">Name</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input type="text" class="form-control"
                                                                                        id="full-name" name="nama_menu"
                                                                                        value="{{ $item->nama_menu }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div
                                                                                class="form-group
                                                                                @error('deskripsi') is-invalid @enderror">
                                                                                <label
                                                                                    class="form-label
                                                                                    @error('deskripsi') is-invalid-label @enderror"
                                                                                    for="default-06">Description</label>
                                                                                <div class="form-control-wrap">
                                                                                    <textarea class="form-control form-control-sm" id="default-06" name="deskripsi_menu" rows="3">{{ $item->deskripsi }}</textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div
                                                                                class="form-group
                                                                                @error('foto') is-invalid @enderror">
                                                                                <label
                                                                                    class="form-label
                                                                                    @error('foto') is-invalid-label @enderror"
                                                                                    for="default-06">Image</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input type="file" class="form-control"
                                                                                        id="default-06" name="foto">
                                                                                </div>
                                                                                <div class="my-2">

                                                                                    <img src="{{ Storage::disk('s3')->temporaryUrl($item->foto, '+2 minutes')}}"
                                                                                        alt="" width="100px">
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-lg-12">
                                                                            <div
                                                                                class="form-group
                                                                            @error('deskripsi') is-invalid @enderror">
                                                                                <label
                                                                                    class="form-label
                                                                                @error('deskripsi') is-invalid-label @enderror"
                                                                                    for="default-06">Nutrition Facts</label>
                                                                                <div class="form-control-wrap">
                                                                                    <textarea class="ckeditor form-control form-control-sm" id="ckeditor{{ $item->id }}" name="nutrition_facts">
                                                                                        {!! $item->nutrition_facts !!}
                                                                                    </textarea>
                                                                                </div>
                                                                                @error('deskripsi')
                                                                                    <div class="form-note text-danger">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                    </div>



                                                                </div>
                                                                <div class="modal-footer bg-light">
                                                                    {{-- <span class="sub-text">Modal Footer Text</span> --}}
                                                                    <button type="button" class="btn btn-lg btn-primary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-lg btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal End -->
                                                {{-- Detail modal --}}
                                                <div class="modal fade " tabindex="-1" role="dialog"
                                                    aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                                    id="detail{{ $item->id }}">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Detail Menu</h5>
                                                                <a href="#" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <em
                                                                        class="icon ni ni
                                                                   cross  "></em>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="modal-body show
                                                            ">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div
                                                                            class="form-group
                                                                        @error('nama_menu') is-invalid @enderror">
                                                                            <label
                                                                                class="form-label
                                                                                @error('nama_menu') is-invalid-label @enderror"
                                                                                for="default-06">Name</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="text" class="form-control"
                                                                                    id="default-06" name="nama_menu"
                                                                                    value="{{ $item->nama_menu }}" disabled>
                                                                            </div>
                                                                            @error('nama_menu')
                                                                                <div class="form-note text-danger">
                                                                                    {{ $message }}
                                                                                </div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div
                                                                            class="form-group
                                                                        @error('deskripsi') is-invalid @enderror">
                                                                            <label
                                                                                class="form-label
                                                                                @error('deskripsi') is-invalid-label @enderror"
                                                                                for="default-06">Description</label>
                                                                            <div class="form-control-wrap">
                                                                                <textarea class="form-control" id="default-06" name="deskripsi" disabled>{{ $item->deskripsi }}</textarea>
                                                                            </div>
                                                                            @error('deskripsi')
                                                                                <div class="form-note text-danger">
                                                                                    {{ $message }}
                                                                                </div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div
                                                                            class="form-group
                                                                        @error('nutrition_facts') is-invalid @enderror">
                                                                            <label
                                                                                class="form-label
                                                                                @error('nutrition_facts') is-invalid-label @enderror"
                                                                                for="default-06">Nutrition Fact</label>
                                                                            <div class="form-control-wrap">
                                                                                <textarea class="ckeditor form-control" id="default-06" name="nutrition_facts" disabled>  {!! $item->nutrition_facts !!}</textarea>
                                                                            </div>
                                                                            @error('nutrition_facts')
                                                                                <div class="form-note text-danger">
                                                                                    {{ $message }}
                                                                                </div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="form-inline my-3"> --}}
                                                                    <div
                                                                        class="form-group
                                                                @error('foto') is-invalid @enderror">
                                                                        <label
                                                                            class="form-label
                                                                        @error('foto') is-invalid-label @enderror"
                                                                            for="default-06">Image</label>
                                                                        <div class="form-control-wrap">
                                                                            <img src="{{Storage::disk('s3')->temporaryUrl($item->foto, '+2 minutes')}}"
                                                                                alt="" width="100px">
                                                                        </div>
                                                                        @error('foto')
                                                                            <div class="form-note text-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="mx-2"></div>

                                                                    <div
                                                                        class="form-group
                                                                @error('qr_code') is-invalid @enderror">
                                                                        <label
                                                                            class="form-label
                                                                        @error('qr_code') is-invalid-label @enderror"
                                                                            for="default-06">QR-Code</label>
                                                                        <div class="form-control-wrap">
                                                                            <img src="{{ Storage::disk('s3')->temporaryUrl($item->qr_code, '+2 minutes')}}"
                                                                                alt="" width="100px">
                                                                        </div>
                                                                        @error('qr_code')
                                                                            <div class="form-note text-danger">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>

                                                                </div>


                                                            {{-- </div> --}}
                                                            <div class="modal-footer bg-light">
                                                                <button type="button" class="btn btn-lg btn-primary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal End -->
                                            @endforeach

                                        </div><!-- .nk-tb-list -->
                                    </div>
                                    <div class="card-inner">

                                        {{ $menus->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                        <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct"
                            data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">New Menu</h5>
                                    <div class="nk-block-des">
                                        <p>Add information and add new menu.</p>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="product-title">Product Title</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="product-title"
                                                        name="nama_menu">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="description">Description</label>
                                                <div class="form-control-wrap" style="height: 150px;">
                                                    <textarea type="text" class="form-control" id="description" name="deskripsi_menu"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="nk-block-title">Nutrition Facts</h5>
                                                <div class="nk-block-des">
                                                    <p>Add information of Nutrition Facts.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class=" form-control" name="nutrition_facts"></textarea>
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="foto">Photo</label>
                                                <div class="form-control-wrap">
                                                    <input type="file" class="form-control" id="foto"
                                                        name="foto">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary"><em
                                                    class="icon ni ni-plus"></em><span>Add
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
