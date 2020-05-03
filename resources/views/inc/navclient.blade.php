<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top scrolling-navbar">
    <div class="container">
        <a href="{{url('/')}}" class="navbar-brand">
        <img src="{{asset('assets/client/img/logo.png')}}" width="40" alt="" class="d-inline-block align-middle mr-2">
            <span class="font-weight-bolder">Al-Mustaghfirin</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon" />
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link">
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('berita')}}" class="nav-link">
                        Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('galeri')}}" class="nav-link">
                        Galeri
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('tentang')}}" class="nav-link">
                        Tentang
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>