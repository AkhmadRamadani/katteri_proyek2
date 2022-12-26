@extends('admin.index')
@section('content')
    <!-- content @s
        -->
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
                                                <span>Action</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subscriptions as $item)
                                            <tr class="tb-tnx-item">
                                                <td class="tb-tnx-id">
                                                    <a href="#"><span>{{ $item->id }}</span></a>
                                                </td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-desc">
                                                        <span class="title">{{ $item->paket->nama_paket }}</span>
                                                    </div>
                                                    <div class="tb-tnx-date">
                                                        <span class="date">{{ $item->detail_pembeli->nama }}</span>
                                                        <span
                                                            class="date">{{ \Carbon\Carbon::parse($item->created_at)->format('l, jS \\of F Y') }}</span>
                                                    </div>
                                                </td>
                                                <td class="tb-tnx-amount is-alt">
                                                    <div class="tb-tnx-total">
                                                        <span class="amount">@money($item->payment->tagihan)</span>
                                                    </div>
                                                    <div class="tb-tnx-status">
                                                        @if ($item->payment->status == '0')
                                                            <span class="badge badge-dot badge-warning">Waiting for
                                                                payment</span>
                                                        @else
                                                            <span class="badge badge-dot badge-primary">Already paid</span>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td class="tb-tnx-action">
                                                    <div class="dropdown">
                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                            data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                {{-- proof of transaction add click button to call modal --}}
                                                                {{-- @if ($item->payment->status == '1') --}}
                                                                    <li><a href="#" data-toggle="modal"
                                                                            data-target="#modal-{{ $item->id }}">Proof Of
                                                                            Transaction</a></li>
                                                                {{-- @endif --}}
                                                                {{-- <li><a href="#">Proof Of Transaction</a></li> --}}
                                                                {{-- <li><a href="">Approve</a></li> --}}
                                                                {{-- <li><a href="#">Reject</a></li> --}}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            {{-- modal to show proof of transaction --}}
                                            <div class="modal fade
                                            @if ($item->payment->status == '0') show @endif
                                            "
                                                tabindex="-1" role="dialog" id="modal-{{ $item->id }}">
                                                <div class="modal-dialog modal-dialog-top modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <a href="#" class="close" data-dismiss="modal"><em
                                                                class="icon ni ni-cross-sm"></em></a>
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Proof Of Transaction</h5>
                                                        </div>
                                                        <div
                                                            class="modal-body
                                                        @if ($item->payment->status == '0') show @endif

                                                        ">
                                                            <div class="row">
                                                                {{-- Call image of transactions proof --}}
                                                                @if ($item->payment->bukti_pembayaran == null)
                                                                    <div class="col-md-12">
                                                                        <h3 class="text-center">No proof of transaction</h3>
                                                                    </div>
                                                                @else
                                                                    <div class="col-md-6">
                                                                        <img src="{{ Storage::disk('s3')->temporaryUrl( $item->payment->bukti_pembayaran, '+2 minutes') }}"
                                                                            alt="proof of transaction" width="100%">

                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                            {{-- Button to approve and reject transaction --}}
                                                            <form action="{{ route('subscription.update', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                {{-- hidden input --}}
                                                                <input type="hidden" name="status" value="2">
                                                                <button type="submit" class="btn btn-primary">Approve</button>
                                                            </form>
                                                            <form action="{{ route('subscription.update', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                {{-- hidden input --}}
                                                                <input type="hidden" name="status" value="3">
                                                                <button type="submit" class="btn btn-danger">Rejected</button>
                                                            </form>
                                                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @endforeach


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
                                        @foreach ($history_subs as $item)
                                            <tr class="tb-tnx-item">
                                                <td class="tb-tnx-id">
                                                    <a href="#"><span>{{ $item->id }}</span></a>
                                                </td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-desc">
                                                        <span class="title">{{ $item->paket->nama_paket }}</span>
                                                    </div>
                                                    <div class="tb-tnx-date">
                                                        <span class="date">{{ $item->detail_pembeli->nama }}</span>
                                                        <span
                                                            class="date">{{ \Carbon\Carbon::parse($item->created_at)->format('l, jS \\of F Y') }}</span>
                                                    </div>
                                                </td>
                                                <td class="tb-tnx-amount is-alt">
                                                    <div class="tb-tnx-total">
                                                        <span class="amount">@money($item->payment->tagihan)</span>

                                                    </div>
                                                    <div class="tb-tnx-status">
                                                        @if ($item->payment->status == '2')
                                                            <span class="badge badge-dot badge-success">Accepted</span>
                                                        @else
                                                            <span class="badge badge-dot badge-danger">Reject</span>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


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
