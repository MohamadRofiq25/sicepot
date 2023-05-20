<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-primary">
        <div class="container-fluid">
          <img src="/img/sicepot.png" height="50px" class="float-left logo-fav">
          <h4 class="navbar-brand text-white">Badan Pusat Statistik Kab. Cilacap</h4>
          
            <div class="icon">
                <a class="float-right logout text-white" href="/logout">Logout
                    <div class="fa-solid fa-right-from-bracket ms-2 me-3">
                    </div>
                </a>

            </div>
          </div>
        </div>
      </nav>

      <div class="sidebar">
        <nav>
            <ul class="mt-5">
                <a href="/dashboard" style="text-decoration: none;">
                    <li>
                        <div>
                            <span class="fas fa-tachometer-alt"></span>
                            <span>Dashboard</span>
                        </div>
                    </li>
                </a>

                <!-- data -->
                <a href="/dashboard/mitra/daftar" style="text-decoration: none;">
                <li>
                    <div>
                        <span class="fa-solid fa-user-group"></span>
                        <span>Daftar Mitra</span>
                    </div>
                </li>
                </a>

                
                <a href="/dashboard/kegiatan/daftar" style="text-decoration: none;">
                <li class="klik2" id="flip2" style="cursor:pointer;">
                    <div>
                        <span class="fa-solid fa-briefcase"></span>
                        <span>Daftar Kegiatan</span>
                    </div>
                </li>
                </a>

                <a href="/dashboard/master_kegiatan/daftar" style="text-decoration: none;">
                <li class="klik2" id="flip2" style="cursor:pointer;">
                    <div>
                        <span class="fa-solid fa-laptop-file"></span>
                        <span>Master Kegiatan</span>
                    </div>
                </li>
                </a>

                <a href="/dashboard/data_spk/spk" style="text-decoration: none;">
                <li class="klik2" id="flip2" style="cursor:pointer;">
                    <div>
                        <span class="fa-solid fa-database"></span>
                        <span>Data SPK</span>
                    </div>
                </li>
                </a>

                
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-clipboard-list me-2"></i>Laporan
                        </a>
                        <ul class="dropdown-menu text-black">
                            <li><a class="dropdown-item text-black" href="/dashboard/laporan/spj"><i class="fas fa-clipboard-list me-2"></i>SPJ</a></li>
                            <li><a class="dropdown-item text-black" href="/dashboard/laporan/lamp_spk"><i class="fas fa-clipboard-list me-2"></i>SPK</a></li>
                            <li><a class="dropdown-item text-black" href="/dashboard/laporan/bast"><i class="fas fa-clipboard-list me-2"></i>BAST</a></li>
                        </ul>
                </li>

                
            </ul>
        </nav>
    </div>

    <script src="js/bootstrap.js"></script>

</body>