<header>
    <nav class="navbar" id="header_styles">
        <div class="container-fluid">
          <a class="navbar-brand">
            
        
          <img src="{{ url('/asset/header/Capture.PNG') }}" alt="Image">
        </a>
          

          <ul class="nav justify-content-center" >

            <li class="nav-item" >
              <a class="nav-link active"  aria-current="page" href="#home" id="header-ul"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" id="header-ul"><b>About</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="header-ul"><b>Student Info</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-disabled="true" href="#" id="header-ul"><b>Support</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-disabled="true" href="#" id="header-ul"><b>Admission</b></a>
            </li>
          </ul>


          <form class="d-flex" role="search">
            <button  id="header-button" type="submit"><b><a href="{{ url('signup') }}" class="header-button-a">Sign up</a></b></button>
          </form>
        </div>
    </nav>
  </header>