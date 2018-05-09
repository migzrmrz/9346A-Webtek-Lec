<header role="banner">
     
    <nav class="navbar navbar-expand-md navbar-dark bg-light">
      <div class="container">
        <a class="navbar-brand absolute" href="{{ url('/index')}}">WEBTEK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
          <ul class="navbar-nav absolute-right">
            <li class="nav-item">
              <a href="{{ url('/login')}}" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/register')}}" class="nav-link">Register</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->