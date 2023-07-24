<div class="page-header">
    <nav class="navbar navbar-expand">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                
            </ul>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item small-screens-sidebar-link">
                <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
            </li>
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ url('public', Auth::guard('super-admin')->user()->poto) }}" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                    <span>{{ Auth::guard('super-admin')->user()->nama }}</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"> Account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" href="{{ url('logout') }}">Log out</a>
                </div>
            </li>
           
           
        </ul>
    </nav>
</div>