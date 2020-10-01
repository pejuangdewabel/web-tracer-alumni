    <div class="container-fluid">
      <nav
        class="row navbar navbar-expand-lg navbar-light bg-white navbar-custome border-bottom"
      >
        <a href="{{ route('home') }}" class="navbar-brand">
          <img
            src="{{ url('frontendUser/images/index.jpg') }}"
            alt="logo SMA 13 Bandar Lampung"
          />
          <strong class="text-center judul">TRACER ALUMNI</strong>
        </a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navb"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
              <a href="{{ route('home') }}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item mx-md-2">
              <a href="{{ route('tentang') }}" class="nav-link {{ (request()->is('tentang')) ? 'active' : '' }}">Tentang</a>
            </li>
            <li class="nav-item mx-md-2">
              <a href="{{ route('berita') }}" class="nav-link {{ (request()->is('berita*')) ? 'active' : '' }}">Berita</a>
            </li>
            <li class="nav-item mx-md-2">
              <a href="{{ route('pengumuman') }}" class="nav-link {{ (request()->is('pengumuman*')) ? 'active' : '' }}">Pengumuman</a>
            </li>
          </ul>
          <!-- Mobile Button -->
          <form action="" class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0 px-4">Masuk</button>
          </form>

          <!-- Web Button -->
          <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
            <button
              class="btn btn-login mr-5 btn-navbar-right my-2 my-sm-0 px-4"
            >
              Masuk
            </button>
          </form>
        </div>
      </nav>
    </div>