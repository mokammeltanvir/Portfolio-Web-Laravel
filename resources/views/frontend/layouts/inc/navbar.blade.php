<nav class="navbar navbar-expand-lg main_menu" id="main_menu_area">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('frontend/assets') }}/images/logo.png" alt="Rabins">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="far fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home-page">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about-page">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio-page">Portfolio <i class="fas fa-angle-down"></i></a>
          <ul class="sub_menu">
            <li><a href="portfolio.html">Portfolio Grid</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills-page">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#blog-page">Blog <i class="fas fa-angle-down"></i></a>
          <ul class="sub_menu">
            <li><a href="blog.html">Blog Grid</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact-page">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>