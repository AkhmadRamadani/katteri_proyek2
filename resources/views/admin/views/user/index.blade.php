@extends('admin.index')
@section('content')
    {{-- <div class="modal fade" tabindex="-1" id="addAngkotModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Angkot</h5>
                </div>
                <form method="post" action="" enctype="multipart/form-data" class="mt-2">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="no_pol">No Polisi</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="no_pol" name="no_pol"
                                            placeholder="No Polisi" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="nama_trayek">Nama Trayek</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" id="nama_trayek" name="nama_trayek">
                                            @for ($i = 0; $i < 5; $i++)
                                                <option value="{{ $i }}">Test {{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="nama_pemilik">Nama Pemilik</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" id="nama_pemilik" name="nama_pemilik">
                                            @for ($i = 0; $i < 5; $i++)
                                                <option value="{{ $i }}">Test {{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="merk">Merk</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="merk" name="merk"
                                            placeholder="Merk" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="foto_stnk">Pilih Foto STNK</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto_stnk" name="foto_stnk"
                                                required>
                                            <label class="custom-file-label" for="foto_stnk">Pilih</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="foto_bpkb">Pilih Foto BPKB</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto_bpkb" name="foto_bpkb"
                                                required>
                                            <label class="custom-file-label" for="foto_bpkb">Pilih</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">User Lists</h3>
                <div class="nk-block-des text-soft">
                    <p>Terdapat total {{ count($users) }} pengguna.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em
                            class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">

                            <li class="nk-block-tools-opt">
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="modal"
                                        data-target="#addAngkotModal"><em class="icon ni ni-plus"></em></a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- .toggle-wrap -->
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner-group">

                <div class="card-inner position-relative card-tools-toggle">

                </div><!-- .card-inner -->
                <div class="card-inner p-0">
                    <div class="nk-tb-list nk-tb-ulist is-compact">
                        <div class="nk-tb-item nk-tb-head">

                            <div class="nk-tb-col"><span class="sub-text">Id. Pengguna</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Nama</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Status Pesanan Terakhir</span></div>
                            <div class="nk-tb-col nk-tb-col-tools text-right">
                                <div class="dropdown">
                                    <a class="btn btn-xs btn-outline-light btn-icon dropdown-toggle" data-toggle="dropdown"
                                        data-offset="0,5"><em class="icon ni ni-plus"></em></a>

                                </div>
                            </div>
                        </div><!-- .nk-tb-item -->
                        @foreach ($users as $user)
                            <div class="nk-tb-item">
                                <div class="nk-tb-col">
                                    <div class="user-card">
                                        <div class="user-avatar xs bg-primary">
                                            <span>{{ $user->id }}</span>
                                        </div>
                                        <!---<div class="user-name">
                                                                                                    <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                                                                </div>--->
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <a href=""><span>{{ $user->name }}</span></a>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span>{{ $user->email }}</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    {{-- if payment status == 0 is red with text not paid --}}

                                    @if ($user->subscribe->payment->status == 0)
                                        <span class="badge badge-danger">Not Paid</span>
                                    @elseif ($user->subscribe->payment->status == 1)
                                        <span class="badge badge-success">Paid</span>
                                    @endif
                                </div>

                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-2">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle"
                                                    data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href=""><em class="icon ni ni-eye"></em><span>View
                                                                    Details</span></a></li>
                                                        {{-- <li><a href="#" data-toggle="modal"
                                                                data-target="#updateAngkotModal{{ $user->id }}"><em
                                                                    class="icon ni ni-repeat"></em><span>Update</span></a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#" data-toggle="modal"
                                                                data-target="#deleteAngkotModal{{ $user->id }}"><em
                                                                    class="icon ni ni-na"></em><span>Delete
                                                                    Sopir</span></a></li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                        {{-- DELETE MODAL --}}
                    </div><!-- .nk-tb-item -->
                </div><!-- .nk-tb-list -->
            </div><!-- .card-inner -->
            <div class="card-inner">
                {{-- {{ $users->links('pagination::bootstrap-4') }} --}}

            </div><!-- .card-inner -->
        </div><!-- .card-inner-group -->
    </div><!-- .card -->
    </div><!-- .nk-block -->
@endsection
