<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/accordion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aio.css') }}">
    <script>
      function showDropdown(){
        document.getElementById("main-drop").style.display="block";
      }
    </script>
    <script src="{{ asset('js/display.js') }}"></script>
    <title>Home</title>
  </head>
  <body>
    <div class="container">
      <header class="main-head">
        <div class="logo">
          <a href="/"><img src="{{ asset('images/logo.png')}}" alt="Logo"></a>
        </div>
        <div>
          <!-- nav de escritorio //-->
          <ul class="nav-bar-lg">
            <li><a class="dropbtn" href="/">Home</a></li>
            <li><a class="dropbtn" href="{{ route('products') }}">Products</a></li>
            @if (!Auth::check())
              <li><a class="dropbtn" href="{{ route('login') }}">Login</a></li>
              <li><a class="dropbtn" href="{{ route('register') }}">Register</a></li>
            @else
              <li><a class="dropbtn" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
              <li><a class="dropbtn" href="{{ route('addproducts') }}">Upload new product</a></li>
              <li><a class="dropbtn" href="{{ route('products') }}">Products</a></li>
            @endif
            <li><a class="dropbtn" href="{{ route('faqs') }}">FAQs</a></li>
          </ul>
        </div>
        <nav>
          <!-- nav celular y tablet -->
          <ul class="nav-bar">
            <li class="dropdown">
              <button class="dropbtn" onclick="showDropdown()">MENU</button>
              <div id="main-drop" class="dropdown-content">
                <a href="/">Home</a>
                <a href="{{ route('products') }}">Products</a>
                @if (!Auth::check())
                  <a href="{{ route('login') }}">Login</a>
                  <a href="{{ route('register') }}">Register</a>
                @else
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                  <a href="{{ route('addproducts') }}">Upload your product</a>
                @endif
                <a href="{{ route('faqs') }}">FAQs</a>
              </div>
            </li>
          </ul>
        </nav>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </header>
      <div>
        @yield('content')
      </div>
      <footer>
        <hr>
        <div class="social-links">
          <nav>
            <ul>
              <li><a href="#"><img src="{{ asset('images/img-facebook.png') }}" alt="Facebook"></a></li>
              <li><a href="#"><img src="{{ asset('images/img-instagram.png') }}" alt="Twitter"></a></li>
            </ul>
          </nav>
        </div>
      </footer>
    </div>
  </body>
</html>
