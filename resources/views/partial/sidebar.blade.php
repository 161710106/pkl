<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('assets/admin/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Menu</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                             <a href="{{ route('paket.index')}}" class="nav-link">
                                <i class="fas fa-table"></i>Paket Umroh</a>
                        </li>
                        <li>
                            <a href="{{ route('jadwal.index')}}" class="nav-link">
                                <i class="fas fa-table"></i>jadwal</a>
                        </li>
                        <li>
                            <a href="{{ route('syarat.index')}}" class="nav-link">
                                <i class="fas fa-table"></i>syarat </a>
                        </li>
                       <li>
                            <a href="{{ route('fasilitas.index')}}" class="nav-link">
                                <i class="fas fa-table"></i>Fasilitas</a>
                        </li>
                         <li>
                            <a href="{{ route('berita.index')}}" class="nav-link">
                                <i class="fas fa-table"></i>Berita</a>
                        </li>
                         <li>
                       <a href="table.html">
                                <i class="fas fa-table"></i>Galery</a>
                        </li>
                         <li>
                            <a href="{{ route('about.index')}}" class="nav-link">
                                <i class="fas fa-table"></i>About</a>
                        </li>
                         <li>
                           <a href="{{ route('artikel.index')}}" class="nav-link">
                                <i class="fas fa-table"></i>Artikel</a>
                        </li>
                         <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>About</a>
                        </li>
                         <li>
                          <a href="{{ route('pembina.index')}}" class="nav-link">
                                <i class="fas fa-table"></i>Pembina</a>
                        </li>
    
                            </ul>
                        </li>
                        
                      
                            </ul>
                        </li>
                       
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>