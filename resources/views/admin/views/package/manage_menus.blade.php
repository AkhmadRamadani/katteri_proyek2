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
                                                        <input type="text" class="form-control" id="default-04"
                                                            placeholder="Quick search by id">
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
                                                <!-- <div class="nk-tb-col nk-tb-col-tools">
                                                                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                                                                <li class="mr-n1">
                                                                                                    <div class="dropdown">
                                                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                                                                            data-toggle="dropdown"><em
                                                                                                                class="icon ni ni-more-h"></em></a>
                                                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                                                            <ul class="link-list-opt no-bdr">
                                                                                                                <li><a href="#"><em
                                                                                                                            class="icon ni ni-edit"></em><span>Edit
                                                                                                                            Selected</span></a></li>
                                                                                                                <li><a href="#"><em
                                                                                                                            class="icon ni ni-trash"></em><span>Remove
                                                                                                                            Selected</span></a></li>
                                                                                                                <li><a href="#"><em
                                                                                                                            class="icon ni ni-bar-c"></em><span>Update
                                                                                                                            Stock</span></a></li>
                                                                                                                <li><a href="#"><em
                                                                                                                            class="icon ni ni-invest"></em><span>Update
                                                                                                                            Price</span></a></li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div> -->
                                            </div><!-- .nk-tb-item -->
                                            @foreach ($menus as $item)
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="{{ asset('storage/'. $item->foto) }}" alt="" class="thumb">
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
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-edit"></em><span>Edit
                                                                                        Product</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-eye"></em><span>View
                                                                                        Product</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-activity-round"></em><span>Product
                                                                                        Orders</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-trash"></em><span>Remove
                                                                                        Product</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->
                                            @endforeach

                                        </div><!-- .nk-tb-list -->
                                    </div>
                                    <div class="card-inner">
                                        <div class="nk-block-between-md g-3">
                                            <div class="g">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                    <li class="page-item"><a class="page-link" href="#"><em
                                                                class="icon ni ni-chevrons-left"></em></a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><span class="page-link"><em
                                                                class="icon ni ni-more-h"></em></span></li>
                                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                    <li class="page-item"><a class="page-link" href="#"><em
                                                                class="icon ni ni-chevrons-right"></em></a></li>
                                                </ul><!-- .pagination -->
                                            </div>
                                            <div class="g">
                                                <div
                                                    class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                    <div>Page</div>
                                                    <div>
                                                        <select class="form-select" data-search="on"
                                                            data-dropdown="xs center">
                                                            <option value="page-1">1</option>
                                                            <option value="page-2">2</option>
                                                            <option value="page-4">4</option>
                                                            <option value="page-5">5</option>
                                                            <option value="page-6">6</option>
                                                            <option value="page-7">7</option>
                                                            <option value="page-8">8</option>
                                                            <option value="page-9">9</option>
                                                            <option value="page-10">10</option>
                                                            <option value="page-11">11</option>
                                                            <option value="page-12">12</option>
                                                            <option value="page-13">13</option>
                                                            <option value="page-14">14</option>
                                                            <option value="page-15">15</option>
                                                            <option value="page-16">16</option>
                                                            <option value="page-17">17</option>
                                                            <option value="page-18">18</option>
                                                            <option value="page-19">19</option>
                                                            <option value="page-20">20</option>
                                                        </select>
                                                    </div>
                                                    <div>OF 102</div>
                                                </div>
                                            </div><!-- .pagination-goto -->
                                        </div><!-- .nk-block-between -->
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
                                                <textarea class="ckeditor form-control" name="nutrition_facts"></textarea>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="calories">Calories</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="calories">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="calories-from-fat">Calories From Fat</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="calories-from-fat">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="nutrients">Nutrients</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="nutrients">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="total-fat">Total Fat</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="total-fat">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="cholesterol">Cholesterol</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="cholesterol">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="sodium">Sodium</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="sodium">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fiber">Fiber</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="fiber">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="sugars">Sugars</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="sugars">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="protein">Protein</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="protein">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="vitamin-a">Vitamin A</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="vitamin-a">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="vitamin-c">Vitamin C</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="vitamin-c">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="iron">Iron</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="iron">
                                                </div>
                                            </div>
                                        </div> --}}


                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="foto">Photo</label>
                                                <div class="form-control-wrap">
                                                    <input type="file" class="form-control" id="foto" name="foto">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="col-12">
                                            <label class="form-label">QR Code</label>
                                            <div class="upload-zone small bg-lighter my-2">
                                                <div class="dz-message">
                                                    <span class="dz-message-text">Drag and drop file</span>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="col-12">
                                            <button type="submit"  class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
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
