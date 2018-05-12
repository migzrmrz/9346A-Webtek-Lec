<header role="banner">
     
    <nav class="navbar navbar-expand-md navbar-dark bg-light">
      <div class="container">
        <a class="navbar-brand absolute" href="{{ url('/index')}}">WEBTEK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('/index')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ url('/courses')}}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Online Courses</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{route('htmlCourse')}}">HTML</a>
                <a class="dropdown-item" href="{{route('cssCourse')}}">CSS</a>
                <a class="dropdown-item" href="{{route('phpCourse')}}">PHP</a>
                <a class="dropdown-item" href="{{route('jsCourse')}}">Javascript</a>
                <a class="dropdown-item" href="{{route('nodeJSCourse')}}">NodeJS</a>
              </div>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{ url('/courses')}}">HTML</a>
                <a class="dropdown-item" href="{{ url('/courses')}}">CSS</a>
                <a class="dropdown-item" href="{{ url('/courses')}}">PHP</a>
                <a class="dropdown-item" href="{{ url('/courses')}}">Javascript</a>
                <a class="dropdown-item" href="{{ url('/courses')}}">NodeJS</a>
              </div>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/quiz')}}">Quiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/contact')}}">Contact</a>
            </li>
          </ul>
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