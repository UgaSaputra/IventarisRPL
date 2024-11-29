<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>ALAT</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('bahan.create') }}">
                    <i class="bi bi-circle"></i><span>Bahan</span>
                </a>
            </li>
            <li>
              <a href="{{ route('iventaris.index') }}">
                  <i class="bi bi-circle"></i><span>Iventaris</span>
              </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>DATA BARANG</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('barangkeluar.keluar') }}">
                <i class="bi bi-circle"></i><span>Input Data Barang</span>
            </a>
        </li>
          <li>
            <a href="{{ route('barangmasuk.masuk') }}">
                <i class="bi bi-circle"></i><span>Barang Masuk</span>
            </a>
        </li>
        <li>
          <a href="{{ route('barangkeluar.keluar') }}">
              <i class="bi bi-circle"></i><span>Barang Keluar</span>
          </a>
      </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>PEMINJAMAN</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('peminjaman.index') }}">
                <i class="bi bi-circle"></i><span>Peminjaman Untuk Praktik</span>
            </a>
        </li>
        <li>
          <a href="{{ route('peminjaman.store') }}">
              <i class="bi bi-circle"></i><span>Peminjaman Untuk Diluar Praktik</span>
          </a>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>PENGEMBALIAN</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('pengembalian.index') }}">
                <i class="bi bi-circle"></i><span>Pengembalian Untuk Praktik</span>
            </a>
        </li>
        <li>
          <a href="{{ route('pengembalian.input') }}">
              <i class="bi bi-circle"></i><span>Pengembalian Untuk Diluar Praktik</span>
          </a>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>LAPORAN</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('laporan.kartuAlatRusak') }}">
              <i class="bi bi-circle"></i><span> Kartu Alat Rusak</span>
            </a>
          </li>
          <li>
            <a href="{{ route('laporan.kartuPerawatan') }}">
              <i class="bi bi-circle"></i><span>Kartu Perawatan</span>
            </a>
          </li>
          <li>
            <a href="{{ route('laporan.kartuInventarisUpdate') }}">
              <i class="bi bi-circle"></i><span>Kartu Iventaris Update</span>
            </a>
          </li>
          <li>
            <a href="{{ route('laporan.kartuStokBahan') }}">
              <i class="bi bi-circle"></i><span>Kartu Stok Bahan</span>
            </a>
          </li>
          <li>
            <a href="{{ route('laporan.beritaAcara') }}">
              <i class="bi bi-circle"></i><span>Berita Acara</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside>