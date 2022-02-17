
<nav class="navbar  navbar-expand-md navbar-dark bg-dark  fixed-top">
    <div class="container">

    <a class="navbar-brand" href="{{route('homepage')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto">

        <li class="nav-item active">
          <a class="nav-link" href="{{route('services')}}">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" >Case Studies</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="#">OurStory</a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="#OurPartners">Our Partners</a>
          </li>


          <li class="nav-item">
            <a class="nav-link " href="{{route('ContactUs')}}">Contact Us</a>
          </li>

      </ul>


      </div>
    </div>

  </nav>
