<div class="container-fluid">
    <div class="nk-header-wrap">
        <div class="nk-menu-trigger d-xl-none ml-n1">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                    class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-header-brand d-xl-none">
            <a href="html/index.html" class="logo-link">
                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x"
                    alt="logo-dark">
            </a>
        </div><!-- .nk-header-brand -->
        {{-- <div class="nk-header-news d-none d-xl-block">
            <div class="nk-news-list">
                <a class="nk-news-item" href="#">
                    <div class="nk-news-icon">
                        <em class="icon ni ni-card-view"></em>
                    </div>
                    <div class="nk-news-text">
                        <p>Do you know the latest update of 2022? <span> A overview of our is now
                                available on YouTube</span></p>
                        <em class="icon ni ni-external"></em>
                    </div>
                </a>
            </div>
        </div><!-- .nk-header-news --> --}}
        <div class="nk-header-tools">
            <ul class="nk-quick-nav">
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="user-toggle">
                            <div class="user-avatar sm">
                                <em class="icon ni ni-user-alt"></em>
                            </div>
                            <div class="user-info d-none d-md-block">
                                <div class="user-status">Administrator</div>
                                <div class="user-name dropdown-indicator">{{ $user->name }}</div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <span>{{ substr(preg_replace('/\b(\w)|./', '$1', $user->name), 0, 2) }}</span>
                                </div>
                                <div class="user-info">
                                    <span class="lead-text">{{ $user->name }}</span>
                                    <span class="sub-text">{{ $user->email }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-inner">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <ul class="link-list">
                                    <li>
                                        <input type="submit" class="btn-book-a-table" value="Logout">
                                    </li>
                                </ul>
                            </form>

                        </div>
                    </div>
                </li><!-- .dropdown -->

            </ul><!-- .nk-quick-nav -->
        </div><!-- .nk-header-tools -->
    </div><!-- .nk-header-wrap -->
</div><!-- .container-fliud -->
