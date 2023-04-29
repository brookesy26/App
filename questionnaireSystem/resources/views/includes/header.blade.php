<header>
  <div class="container-fluid px-0">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Questionnaire System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="{{route('home')}}" class="nav-link active">Home</a>
            </li>
          </ul>
          <div class="ml-auto">
            <a href="{{route('register')}}" class='nav-link'>Register</a>
            <a href="{{route('login')}}" class="nav-link" >Login</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
