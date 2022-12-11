@extends('admin.index')
@section('content')
<!-- content @s -->
<div class="nk-content " style="padding: 0">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Dashboard Katteri</h3>
                            <div class="nk-block-des text-soft">
                                <p>Welcome to Katteri Dashboard pages.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                    data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em
                                                class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <!-- Total Users -->
                        <div class="col-md-4">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Total Users</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip"
                                                data-placement="left" title="Total Booking"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount"> 289 </span>
                                    </div>
                                    <div class="invest-data">
                                        <div class="invest-data-amount g-2">
                                            <div class="invest-data-history">
                                                <div class="title">This Month New Comers</div>
                                                <div class="amount">1913</div>
                                            </div>
                                        </div>
                                        <div class="invest-data-ck">
                                            <canvas class="iv-data-chart" id="totalBooking"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->

                        <!-- Total Packages -->
                        <div class="col-md-4">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Total Packages</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip"
                                                data-placement="left" title="Total Room"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount"> 3 </span>
                                    </div>
                                    <div class="invest-data">
                                        <div class="invest-data-amount g-2">
                                            <div class="invest-data-history">
                                                <div class="title">New Package</div>
                                                <div class="amount">Weight Loss Package</div>
                                            </div>
                                        </div>
                                        <div class="invest-data-ck">
                                            <canvas class="iv-data-chart" id="totalRoom"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->

                        <!-- Total Subscriptions -->
                        <div class="col-md-4">
                            <div class="card card-bordered  card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Total Subscriptions</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip"
                                                data-placement="left" title="Total Expenses"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount"> 154 </span>
                                    </div>
                                    <div class="invest-data">
                                        <div class="invest-data-amount g-2">
                                            <div class="invest-data-history">
                                                <div class="title">Success</div>
                                                <div class="amount"> 100 </div>
                                            </div>
                                            <div class="invest-data-history">
                                                <div class="title">Canceled</div>
                                                <div class="amount"> 14 </div>
                                            </div>
                                            <div class="invest-data-history">
                                                <div class="title">Waiting</div>
                                                <div class="amount"> 40 </div>
                                            </div>
                                        </div>
                                        <div class="invest-data-ck">
                                            <canvas class="iv-data-chart" id="totalExpenses"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-6 col-xxl-3">
                            <div class="card card-bordered card-full">
                                <div class="card-inner-group">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">New Customer</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="html/hotel/customers.html" class="link">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary-dim">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="sub-text">info@softnio.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                        data-toggle="dropdown" aria-expanded="false"><em
                                                            class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-setting"></em><span>Action
                                                                        Settings</span></a></li>
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-notify"></em><span>Push
                                                                        Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-pink-dim">
                                                <span>SW</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Sharon Walker</span>
                                                <span class="sub-text">sharon-90@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                        data-toggle="dropdown" aria-expanded="false"><em
                                                            class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-setting"></em><span>Action
                                                                        Settings</span></a></li>
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-notify"></em><span>Push
                                                                        Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-warning-dim">
                                                <span>GO</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Gloria Oliver</span>
                                                <span class="sub-text">gloria_72@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                        data-toggle="dropdown" aria-expanded="false"><em
                                                            class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-setting"></em><span>Action
                                                                        Settings</span></a></li>
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-notify"></em><span>Push
                                                                        Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-success-dim">
                                                <span>PS</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Phillip Sullivan</span>
                                                <span class="sub-text">phillip-85@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                        data-toggle="dropdown" aria-expanded="false"><em
                                                            class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-setting"></em><span>Action
                                                                        Settings</span></a></li>
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-notify"></em><span>Push
                                                                        Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-danger-dim">
                                                <span>TI</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Tasnim Ifrat</span>
                                                <span class="sub-text">tasif-85@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1"
                                                        data-toggle="dropdown" aria-expanded="false"><em
                                                            class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-setting"></em><span>Action
                                                                        Settings</span></a></li>
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-notify"></em><span>Push
                                                                        Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-6 col-xxl-4">
                            <h4>Katteri</h4>
                            <div class="nk-block-des text-soft">
                                <p>Sering dipusingkan dengan urusan makanan tiap hari? Mulai kebiasaan meal planning
                                    dengan Katteri, bisa pesan makanan untuk semua kebutuhan dari jauh-jauh hari.</p>
                                <p>Bayangkan kamu tak perlu lagi repot memikirkan menu makan harian, bekal untuk
                                    bekerja, hingga urusan makan di mana saja. Perut tetap kenyang, pikiran tenang, dan
                                    seperti punya waktu luang tambahan. Itulah yang kamu rasakan ketika mencoba Katteri.
                                    Di Katteri, kamu tidak hanya sekedar pesan makanan bergizi seimbang, tapi juga bisa
                                    meal planning untuk beberapa hari ke depan dengan berbagai macam pilihan paket
                                    makanan.</p>

                                <li>- Bebas repot urusan makan, hati pun terasa tenang.</li>
                                <li>- Bye-bye worry!</li>
                                <li>- Tersedia untuk semua kebutuhanmu!.</li>
                                <br>

                                <p>Mulai kebiasaan meal planning dengan Katteri, urusan makanan tiap hari jadi tidak
                                    memusingkan lagi.</p>

                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
@endsection