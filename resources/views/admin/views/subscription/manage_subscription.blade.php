@extends('admin.index')
@section('content')
<!-- content @s -->
<div class="nk-content" style="padding: 0">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">

                <!-- Table New -->

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">Subscription</h4>
                            <p>The following table will display the Waiting Subscription.</p>
                        </div>
                    </div>
                    <div class="card card-bordered card-preview">
                        <table class="table table-tranx">
                            <thead>
                                <tr class="tb-tnx-head">
                                    <th class="tb-tnx-id"><span class="">ID Transaction</span></th>
                                    <th class="tb-tnx-info">
                                        <span class="tb-tnx-desc d-none d-sm-inline-block">
                                            <span>Package</span>
                                        </span>
                                        <span class="tb-tnx-date d-md-inline-block d-none">
                                            <span class="d-md-none">Date</span>
                                            <span class="d-none d-md-block">
                                                <span>Name</span>
                                                <span>Date</span>
                                            </span>
                                        </span>
                                    </th>
                                    <th class="tb-tnx-amount is-alt">
                                        <span class="tb-tnx-total">Total</span>
                                        <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                    </th>
                                    <th class="tb-tnx-action">
                                        <span>&nbsp;</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tb-tnx-item">
                                    <td class="tb-tnx-id">
                                        <a href="#"><span>T-0001</span></a>
                                    </td>
                                    <td class="tb-tnx-info">
                                        <div class="tb-tnx-desc">
                                            <span class="title">Weight Loss Package</span>
                                        </div>
                                        <div class="tb-tnx-date">
                                            <span class="date">Muh. Fauzi Ramadhan Nugraha</span>
                                            <span class="date">08-12-2019</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-amount is-alt">
                                        <div class="tb-tnx-total">
                                            <span class="amount">Rp. 800.000,-</span>
                                        </div>
                                        <div class="tb-tnx-status">
                                            <span class="badge badge-dot badge-warning">Due</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-action">
                                        <div class="dropdown">
                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                <ul class="link-list-plain">
                                                    <li><a href="#">Proof Of Transaction</a></li>
                                                    <li><a href="#">Approve</a></li>
                                                    <li><a href="#">Reject</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="tb-tnx-item">
                                    <td class="tb-tnx-id">
                                        <a href="#"><span>T-0001</span></a>
                                    </td>
                                    <td class="tb-tnx-info">
                                        <div class="tb-tnx-desc">
                                            <span class="title">Weight Loss Package</span>
                                        </div>
                                        <div class="tb-tnx-date">
                                            <span class="date">Muh. Fauzi Ramadhan Nugraha</span>
                                            <span class="date">08-12-2019</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-amount is-alt">
                                        <div class="tb-tnx-total">
                                            <span class="amount">Rp. 800.000,-</span>
                                        </div>
                                        <div class="tb-tnx-status">
                                            <span class="badge badge-dot badge-warning">Due</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-action">
                                        <div class="dropdown">
                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                <ul class="link-list-plain">
                                                    <li><a href="#">Proof Of Transaction</a></li>
                                                    <li><a href="#">Approve</a></li>
                                                    <li><a href="#">Reject</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- .card-preview -->
                </div><!-- nk-block -->

                <!-- Table New -->

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">History Subscription</h4>
                            <p>The following table can will display all of the history Subscription.</p>
                        </div>
                    </div>
                    <div class="card card-bordered card-preview">
                        <table class="table table-tranx">
                            <thead>
                                <tr class="tb-tnx-head">
                                    <th class="tb-tnx-id"><span class="">ID Transaction</span></th>
                                    <th class="tb-tnx-info">
                                        <span class="tb-tnx-desc d-none d-sm-inline-block">
                                            <span>Package</span>
                                        </span>
                                        <span class="tb-tnx-date d-md-inline-block d-none">
                                            <span class="d-md-none">Date</span>
                                            <span class="d-none d-md-block">
                                                <span>Name</span>
                                                <span>Date</span>
                                            </span>
                                        </span>
                                    </th>
                                    <th class="tb-tnx-amount is-alt">
                                        <span class="tb-tnx-total">Total</span>
                                        <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tb-tnx-item">
                                    <td class="tb-tnx-id">
                                        <a href="#"><span>T-0001</span></a>
                                    </td>
                                    <td class="tb-tnx-info">
                                        <div class="tb-tnx-desc">
                                            <span class="title">Weight Loss Package</span>
                                        </div>
                                        <div class="tb-tnx-date">
                                            <span class="date">Muh. Fauzi Ramadhan Nugraha</span>
                                            <span class="date">08-12-2019</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-amount is-alt">
                                        <div class="tb-tnx-total">
                                            <span class="amount">Rp. 800.000,-</span>
                                        </div>
                                        <div class="tb-tnx-status">
                                            <span class="badge badge-dot badge-danger">Reject</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="tb-tnx-item">
                                    <td class="tb-tnx-id">
                                        <a href="#"><span>T-0001</span></a>
                                    </td>
                                    <td class="tb-tnx-info">
                                        <div class="tb-tnx-desc">
                                            <span class="title">Weight Loss Package</span>
                                        </div>
                                        <div class="tb-tnx-date">
                                            <span class="date">Muh. Fauzi Ramadhan Nugraha</span>
                                            <span class="date">08-12-2019</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-amount is-alt">
                                        <div class="tb-tnx-total">
                                            <span class="amount">Rp. 800.000,-</span>
                                        </div>
                                        <div class="tb-tnx-status">
                                            <span class="badge badge-dot badge-success">Done</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="tb-tnx-item">
                                    <td class="tb-tnx-id">
                                        <a href="#"><span>T-0001</span></a>
                                    </td>
                                    <td class="tb-tnx-info">
                                        <div class="tb-tnx-desc">
                                            <span class="title">Weight Loss Package</span>
                                        </div>
                                        <div class="tb-tnx-date">
                                            <span class="date">Muh. Fauzi Ramadhan Nugraha</span>
                                            <span class="date">08-12-2019</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-amount is-alt">
                                        <div class="tb-tnx-total">
                                            <span class="amount">Rp. 800.000,-</span>
                                        </div>
                                        <div class="tb-tnx-status">
                                            <span class="badge badge-dot badge-danger">Reject</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="tb-tnx-item">
                                    <td class="tb-tnx-id">
                                        <a href="#"><span>T-0001</span></a>
                                    </td>
                                    <td class="tb-tnx-info">
                                        <div class="tb-tnx-desc">
                                            <span class="title">Weight Loss Package</span>
                                        </div>
                                        <div class="tb-tnx-date">
                                            <span class="date">Muh. Fauzi Ramadhan Nugraha</span>
                                            <span class="date">08-12-2019</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-amount is-alt">
                                        <div class="tb-tnx-total">
                                            <span class="amount">Rp. 800.000,-</span>
                                        </div>
                                        <div class="tb-tnx-status">
                                            <span class="badge badge-dot badge-success">Done</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- .card-preview -->
                </div><!-- nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
@endsection