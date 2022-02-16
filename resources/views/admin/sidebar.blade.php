
@guest
@else
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" align="center" class="brand-link">
      {{-- <img src="{{ asset ('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">SIAKAD SBH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">

        <a href="#" class="d-block">Selamat Datang {{ Auth::user()->name }}</a>
            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-tag"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a> --}}
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->

      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-tv"></i> Akademik
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/mahasiswa"><i class="fas fa-users"></i> Mahasiswa</a>
          <a class="dropdown-item" href="/dosen"><i class="fas fa-user-graduate"></i> Dosen Pengajar</a>
          <a class="dropdown-item" href="/dosenkoor"><i class="fas fa-user-graduate"></i> Dosen Koordinator Studi</a>
        </div> --}}

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="/home" class="nav-link ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
               <li class="nav-item menu-open">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/mahasiswa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dosen" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kaprodi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ketua Program Studi</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/tahunakademik" class="nav-link ">
              <i class="nav-icon far fa-calendar-check"></i>
              <p>
                Tahun Akademik
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/jadwalkuliah" class="nav-link">
              <i class="nav-icon far fa-calendar-check"></i>
              <p>
                Jadwal Kuliah
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
                <i class="fas fa-university"></i> <p>Data Akademik</p>
                <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/kurikulum" class="nav-link">
                    <i class="fas fa-atlas nav-icon"></i>
                    <p>Kurikulum</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="/prodi" class="nav-link">
                      <i class="fas fa-building nav-icon"></i>
                      <p>Program Studi</p>
                    </a>
                  </li> <li class="nav-item">
                    <a href="/jurusan" class="nav-link">
                      <i class="fas fa-user-md nav-icon"></i>
                      <p>Jurusan</p>
                    </a>
                  </li> <li class="nav-item">
                    <a href="/matakuliah" class="nav-link">
                      <i class="fas fa-book-open nav-icon"></i>
                      <p>Matakuliah</p>
                    </a>
                  </li> <li class="nav-item">
                    <a href="/ruangan" class="nav-link">
                      <i class="fas fa-hotel nav-icon"></i>
                      <p>Ruangan</p>
                    </a>
                </li>
            </li>

        </ul>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
                <i class="fas fa-cogs"></i> <p>Pengaturan</p>
                <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/setting" class="nav-link ">
                  <i class="nav-icon far fa-cogs"></i>
                  <p>
                    Pengaturan
                  </p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/user" class="nav-link ">
                  <i class="nav-icon far fa-cogs"></i>
                  <p>
                    Pengaturan User
                  </p>
                </a>
            </li>
        </ul>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>
              <p>Keluar </p><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form></a>
          </li>
      <!-- /.sidebar-menu --> <ul class="navbar-nav">


    </div>
    <!-- /.sidebar -->
  </aside>

    {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cogs"></i> Setting
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/setting"><i class="fas fa-info-circle"></i> Infomasi Kampus</a>
                <a class="dropdown-item" href="{{ route('register') }}"><i class="fas fa-user-md"></i> Daftar Akun Admin</a>
                <a class="dropdown-item" href="/tools/whatapps"><i class="fab fa-whatsapp"></i> Kirim Whatapps</a>
        </div>
    </li> --}}

        {{-- <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fas fa-user-tag"></i> {{ Auth::user()->name }} <span class="caret"></span>
            </a>
        </li> --}}
    @endguest
