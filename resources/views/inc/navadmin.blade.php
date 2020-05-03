<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="{{ url('/dashboard')}}"><b>DASHBOARD PANEL</b></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div class="navbar-right">
        <h4 style="padding-top: 20px; padding-right: 40px;"><b><a href="{{ url('/')}}" target="_blank">Yayasan Al-Mustaghfirin</a></b></h4>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ url('/dashboard')}}" class=""><i class="fa fa-home"></i><span>Post Overview</span></a></li>
                <li><a href="{{ url('/posts/create')}}" class=""><i class="lnr lnr-file-empty"></i><span>Buat Postingan</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fa fa-paper-plane-o"></i><span>Kegiatan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{url('/photos/create')}}" class=""><i class="fa fa-image"></i>Foto</a></li>
                            <li><a href="{{url('/videos/create')}}" class=""><i class="fa fa-film"></i>Video</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ url('bantuan')}}" style="margin-left:5px;"><i class="fa fa-info"></i><span>Bantuan</span></a></li>
                {{-- <li><a href="#" class="ml-1"><i class="lnr lnr-exit"></i> <span>Keluar</span></a></li> --}}
                <li><a href="{{ route('logout') }}" style="margin-left:5px;"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="lnr lnr-exit"></i><span>
                    Keluar</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->