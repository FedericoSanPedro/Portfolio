<!-- Navigation -->
<nav>
  <div class="nav-center">
    <!-- nav header -->
    <div class="nav-header">
        <a href="/">
            <img
            src="https://i.postimg.cc/N0B5Zv9M/logo.png"
            alt="Logo personal portfolio"
            title="Logo personal portfolio"
            />
        </a>
        <button class="nav-toggle">
          <i class="fas fa-bars"></i>
        </button>
    </div>
    <ul class="links">
        <li>
            <a href="/" class="{{  request()->is('/') ? 'active' : '' }}">Home</a>
        </li>
        <li>
            <a href="about" class="{{  request()->is('about') ? 'active' : '' }}">About</a>
        </li>
        <li>
            <a href="portfolio" class="{{  request()->is('portfolio') ? 'active' : '' }}">Portfolio</a>
        </li>
      </ul>

      <ul class="social-icons">
       <!-- <li>
          <a href="https://www.instagram.com/fedu_zero/?hl=es" target="_blank" rel="noopenernoreferrer">
            <i class="fab fa-instagram"></i>
          </a>
        </li> -->
        <li>
          <a href="https://www.linkedin.com/in/federico-san-pedro/" target="_blank" rel="noopenernoreferrer">
            <i class="fab fa-linkedin"></i>
          </a>
        </li>
        <li>
          <a href="https://github.com/FedericoSanPedro" target="_blank" rel="noopenernoreferrer">
            <i class="fab fa-github"></i>
          </a>
        </li>
    </ul>
  </div>
</nav>