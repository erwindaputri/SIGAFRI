<div class="page-sidebar dark-theme">
    <div class="logo-box">
        <a href="#" class="logo-text"><img src="{{ url('public') }}/admin/assets/images/afri.png" width="30%" >  SIGAFRI</a>
        <a href="#" id="sidebar-close">
            <i class="material-icons">close</i>
        </a> 
        <a href="#" id="sidebar-state">
            <i class="material-icons">adjust</i>
            <i class="material-icons compact-sidebar-icon">panorama_fish_eye</i>
        </a>
    </div>
    <div class="page-sidebar-inner slimscroll">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                MENU
            </li>
            <li class="{{ (request()->is('Admin/dashboard*')) ? 'active-page' : '' }}">
                <a href="{{ url('Admin/dashboard') }}" >
                    <i class="material-icons-outlined">home</i>Dashboard
                </a>
            </li>
            <li class="{{ (request()->is('Admin/spesies*')) ? 'active-page' : '' }}">
                <a href="{{ url('Admin/spesies') }}" >
                    <i class="material-icons">list</i>Spesies
                </a>
            </li>
            <li class="{{ (request()->is('Admin/ebook*')) ? 'active-page' : '' }}">
                <a href="{{ url('Admin/ebook') }}" >
                    <i class="material-icons">description</i>E-book
                </a>
            </li>
            <li class="{{ (request()->is('Admin/kegiatan*')) ? 'active-page' : '' }}">
                <a href="{{ url('Admin/kegiatan') }}" >
                    <i class="material-icons">article</i>Kegiatan
                </a>
            </li>
            <li class="{{ (request()->is('Admin/rescue*')) ? 'active-page' : '' }}">
                <a href="{{ url('Admin/rescue') }}" >
                    <i class="material-icons">support</i>Rescue
                </a>
            </li>
            

            
        </ul>
    </div>
</div>