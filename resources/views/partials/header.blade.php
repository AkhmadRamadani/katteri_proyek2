<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="{{ url('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Katteri<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('home') }}">Home</a></li>
          <li><a href="{{ url('menu-list') }}">Menu List</a></li>
          <li><a href="#">Your Food</a></li>
          <li><a href="{{ url('profile') }}">Profile User</a></li>
        </ul>
      </nav><!-- .navbar -->
      @if (Auth::guest())
        <a class="btn-book-a-table" href="{{  url ('login') }}">Book Now!</a>

      
      @else 
        <div class="row">


          {{-- logout button with post --}}
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <a class="btn-book-a-table" href="{{  url ('menu-list') }}">Book Now!</a>

            <input type="submit" class="btn-book-a-table" value="Logout">
          </form>

        
        </div>
      @endif
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->