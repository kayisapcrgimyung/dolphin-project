<div class="sidebar" id="sidebar"> 
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <div class="header-left">
                        <a href="index.html" class="logo">
                            <img src="{{asset('assets/img/dolphine.png')}}" width="40" height="40" alt="">
                            <span class="text-uppercase">Dolphin</span>
                        </a>
                    </div>
                    <ul class="sidebar-ul">
                        <li class="menu-title">Dolphin Admin</li>
                        <li>
                            <a href="{{route('dashboard')}}"><img src="{{asset('assets/img/sidebar/icon-1.png')}}" alt="icon"><span>Dashboard</span></a>
                        </li>
                        
                        <li>
                            <a href="{{route('menu.index')}}"><img src="{{asset('assets/img/sidebar/icon-8.png')}}" alt="icon"> <span>Nilai</span></a>
                        </li>
                        
                        <li>
                            <a href="{{route('tugas.index')}}"><img src="{{asset('assets/img/sidebar/icon-17.png')}}" alt="icon"> <span>Tugas</span></a>
                        </li>


                        <li>
                            <a href="{{route('riwayat.index')}}"><img src="{{asset('assets/img/sidebar/icon-12.png')}}" alt="icon"> <span>Riwayat</span></a>
                        </li> 
                        <li>
                            <a href="{{route('siswa.index')}}"><img src="{{asset('assets/img/sidebar/icon-4.png')}}" alt="icon"> <span>Siswa</span></a>
                        </li> 
                        <li>
                            <a href="{{route('guru.index')}}"><img src="{{asset('assets/img/sidebar/icon-19.png')}}" alt="icon"> <span>Guru</span></a>
                        </li>
                        <li>
                            <a href="{{route('pengumpulan.index')}}"><img src="{{asset('assets/img/sidebar/icon-18.png')}}" alt="icon"> <span>Pengumpulan</span></a>
                        </li>
                         
						<li class="submenu">
                            <a href="#"><i class="fas fa-copy"></i><span class="side-txt">Pages</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/sesi/logout"> Logout </a></li>
                                
							</ul>
						</li>	
                    </ul>
                </div>
            </div>
        </div>