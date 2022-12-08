@extends('admin.index')
@section('content')
<!-- content @s -->
<div class="nk-content " style="padding: 0">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="components-preview wide-md mx-auto">
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head-content">
                        <h4 class="title nk-block-title">Weight Loss Package</h4>
                        <div class="nk-block-des">
                            <p>Add this information for your package down below.
                            </p>
                        </div>
                    </div>
                    <div class="card card-preview" style="margin-top: 20px;">
                        <div class="card-inner">
                            <div class="preview-block">
                                <span class="preview-title-lg overline-title">Package Information</span>
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="default-01">Package Title</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="default-01"
                                                    placeholder="Input placeholder">
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
                                                    placeholder="Input placeholder">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="default-textarea">Textarea</label>
                                            <div class="form-control-wrap">
                                                <textarea class="form-control no-resize"
                                                    id="default-textarea">Large text area content</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="default-06">Change Picture</label>
                                            <div class="form-control-wrap">
                                                <div class="custom-file">
                                                    <input type="file" multiple class="custom-file-input"
                                                        id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img class="card-img-top" src="{{ asset('assets/img/menu/menu-item-2.png') }}"
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
                                                    data-placeholder="Select Multiple options">
                                                    <option value="default_option">Default Option</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
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
                                                    data-placeholder="Select Multiple options">
                                                    <option value="default_option">Default Option</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
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
                                                    data-placeholder="Select Multiple options">
                                                    <option value="default_option">Default Option</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
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
                                                    data-placeholder="Select Multiple options">
                                                    <option value="default_option">Default Option</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
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
                                                    data-placeholder="Select Multiple options">
                                                    <option value="default_option">Default Option</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
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
                                                    data-placeholder="Select Multiple options">
                                                    <option value="default_option">Default Option</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
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
                                                    data-placeholder="Select Multiple options">
                                                    <option value="default_option">Default Option</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row gy-4" style="display: flex; justify-content: center;">
                                    <a href="#" class="btn btn-lg btn-primary">Save Information</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card-preview -->
                </div><!-- .nk-block -->
            </div><!-- .components-preview -->
        </div>
    </div>
</div>
<!-- content @e -->
@endsection