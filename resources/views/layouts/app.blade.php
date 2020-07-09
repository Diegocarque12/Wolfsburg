<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wolfsburg Restaurant Official Page">
    <meta name="author" content="Yuvania Castillo & Diego Carvajal">
    <title>Wolfsburg</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{asset('css/stylesheet.css')}}">
    @yield('imports')
    
  </head>


  <body>
    <header>
      <div class="nav nav--header  justify-content-between">

            <a href="{{ url('/') }}" class="navbar-brand ">
              <img src=" {{asset('../src/logoCopy.png')}}" class="nav__link--brand" alt="logo-Wolfsburg">
            </a>

          
            <div class="navbar navbar-expand-md">
              <button class="nav__btn--colapse" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <img src="https://img.icons8.com/cotton/48/000000/menu.png"/>
              </button>

             <div class="collapse navbar-collapse mt-3 mr-5" id="navbarNav"> 
              <ul class="navbar-nav mr-auto">
                <li class="nav__item active" ><a class="nav__link" href="{{ url('') }}">Home</a></li>
                <li class="nav__item" ><a class="nav__link" href="{{ url('menu') }}">Menu</a></li>
                <li class="nav__item" ><a class="nav__link" href="{{ url('aboutUs') }}">Our Team</a></li>
                <li class="nav__item" ><a class="nav__link" href="{{ url('form') }}">Contact Us</a></li>
                @if (Route::has('login'))
                  @auth
                    <a href="#" class="nav__link dropdown text-white col-auto btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                              Welcome {{ Auth::user()->name }}! <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-outline-warning" href="{{ url('/products') }}">Admin</a>
                      </li>
                      <li>
                        <a class="btn-outline-warning" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
                    @else
                    <li class="nav__item" ><a class="nav__link" href="{{ url('login') }}">Login</a></li>
                  @endauth
                @endif
                
              </ul>
            </div>
             
           
            </div>
        </div>

      </div>
    </header>

    <div class="">

      @yield('content')

    </div> <!-- Container -->

    <footer class="footer">
      <div class="footer__container">
        <p class="footer__text text-center"> Laravel Laboratories &copy; 2020</p>
      </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>
