@extends('admin.index')
@section('content')
    <!-- content @s
        -->

        <div class="nk-content " style="padding: 0">
            <div class="container-fluid">

                <div class="nk-content-inner">

                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">{{ $package->nama_paket }}</h4>
                                <div class="nk-block-des">
                                    <p>Add this information for your package down below.
                                    </p>
                                </div>
                            </div>
                            <div class="card card-preview" style="margin-top: 20px;">
                                <form action="{{ route('paket.update', $package->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-inner">
                                        <div class="preview-block">
                                            <span class="preview-title-lg overline-title">Package Information</span>
                                            <div class="row gy-4">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="default-01">Package Title</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="default-01"
                                                                placeholder="Input placeholder" name="nama_paket"
                                                                value="{{ $package->nama_paket }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="default-05">Price</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-text-hint">
                                                                <span class="overline-title">Rp</span>
                                                            </div>
                                                            <input type="text" class="form-control" id="default-05"
                                                                placeholder="Input placeholder" name="harga_paket"
                                                                value="{{ $package->harga_paket }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="default-textarea">Description</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="form-control no-resize" id="default-textarea" name="deskripsi_paket">{{ $package->deskripsi }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="default-06">Change Picture</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" multiple class="custom-file-input"
                                                                    id="customFile" name="foto">
                                                                <label class="custom-file-label" for="customFile">Choose
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img class="card-img-top" src="{{ asset('storage/' . $package->foto) }}"
                                                        alt="" style="padding: 40px;">
                                                </div>
                                            </div>
                                            <hr class="preview-hr">
                                            <span class="preview-title-lg overline-title">Add Menu for Package</span>
                                            <div class="row gy-4">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Senin</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" multiple="multiple"
                                                                data-placeholder="Select Multiple options" name="menu_senin[]">
                                                                @foreach ($menus as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        {{ in_array($item->id, $package->menus['Senin']) ? 'selected' : '' }}>
                                                                        {{ $item->nama_menu }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-4">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Selasa</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" multiple="multiple"
                                                                data-placeholder="Select Multiple options" name="menu_selasa[]">
                                                                @foreach ($menus as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        {{ in_array($item->id, $package->menus['Selasa']) ? 'selected' : '' }}>
                                                                        {{ $item->nama_menu }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-4">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Rabu</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" multiple="multiple"
                                                                data-placeholder="Select Multiple options" name="menu_rabu[]">
                                                                @foreach ($menus as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        {{ in_array($item->id, $package->menus['Rabu']) ? 'selected' : '' }}>
                                                                        {{ $item->nama_menu }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-4">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Kamis</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" multiple="multiple"
                                                                data-placeholder="Select Multiple options"
                                                                name="menu_kamis[]">
                                                                @foreach ($menus as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        {{ in_array($item->id, $package->menus['Kamis']) ? 'selected' : '' }}>
                                                                        {{ $item->nama_menu }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-4">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Jumat</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" multiple="multiple"
                                                                data-placeholder="Select Multiple options"
                                                                name="menu_jumat[]">
                                                                @foreach ($menus as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        {{ in_array($item->id, $package->menus['Jumat']) ? 'selected' : '' }}>
                                                                        {{ $item->nama_menu }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-4">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Sabtu</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" multiple="multiple"
                                                                data-placeholder="Select Multiple options"
                                                                name="menu_sabtu[]">
                                                                @foreach ($menus as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        {{ in_array($item->id, $package->menus['Sabtu']) ? 'selected' : '' }}>
                                                                        {{ $item->nama_menu }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-4">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Minggu</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" multiple="multiple"
                                                                data-placeholder="Select Multiple options"
                                                                name="menu_minggu[]">
                                                                @foreach ($menus as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        {{ in_array($item->id, $package->menus['Minggu']) ? 'selected' : '' }}>
                                                                        {{ $item->nama_menu }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="row gy-4" style="display: flex; justify-content: center;">
                                                <button type="submit" class="btn btn-lg btn-primary">Save Information</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div><!-- .card-preview -->
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <div class="preview-block">
                                        <span class="preview-title-lg overline-title">Danger Zone</span>
                                        <div class="row gy-4">
                                            <div class="col-12">

                                                {{-- Button form to call modal --}}
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#deleteModal">
                                                    Delete Package
                                                </button>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                    </div><!-- .components-preview -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Package</h5>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this package?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{ route('paket.destroy', $package->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- content @e -->
    @endsection
