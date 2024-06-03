
            <!DOCTYPE html>
            <html lang="en">
            
            <head>
              <meta charset="utf-8" />
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
              <link rel="icon" type="image/png" href="../assets/img/favicon.png">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
              <title>
                Bebas Pinjam by Meisya
              </title>
              <!--     Fonts and icons     -->
              <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
              <!-- Nucleo Icons -->
              <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
              <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
              <!-- Font Awesome Icons -->
              <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
              <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
              <!-- CSS Files -->
              <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
              <!-- Nepcha Analytics (nepcha.com) -->
              <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
              <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

              <!-- Select2 CSS -->
              <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
              <!-- jQuery -->
              <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
              <!-- Select2 JS -->
              <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            </head>
            
            <body class="g-sidenav-show  bg-light gray-100">
              <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
                <div class="sidenav-header">
                  <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                  <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html " target="_blank">
                    <span class="ms-3 font-weight-bold" style="font-size: 30px">BEBAS PINJAM</span>
                  </a>
                </div>
                <hr class="horizontal dark mt-0">
                <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                  <ul class="navbar-nav">
            
                    <li class="nav-item mt-3">
                      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Dashboard</h6>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link  {{ request()->is('beranda') ? 'active' : '' }}" href="beranda">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-house" style="color: hotpink"></i>
                        </div>
                        <span class="nav-link-text ms-1">Beranda</span>
                      </a>
                    </li>
            
                    <li class="nav-item mt-3">
                      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Users</h6>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link  {{ request()->is('petugas') ? 'active' : '' }}" href="petugas">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-users" style="color: hotpink"></i>
                        </div>
                        <span class="nav-link-text ms-1">Petugas</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link  {{ request()->is('anggota') ? 'active' : '' }}" href="anggota">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-user" style="color: hotpink"></i>
                        </div>
                        <span class="nav-link-text ms-1">Anggota</span>
                      </a>
                    </li>
            
                    
                    <li class="nav-item mt-3">
                      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Fitur</h6>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link  {{ request()->is('jenis') ? 'active' : '' }}" href="jenis">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-font" style="color: hotpink"></i>
                        </div>
                        <span class="nav-link-text ms-1">Jenis</span>
                      </a>
            
                    <li class="nav-item">
                      <a class="nav-link  {{ request()->is('ruangs') ? 'active' : '' }}" href="ruangs">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-people-roof" style="color: hotpink"></i>
                        </div>
                        <span class="nav-link-text ms-1">Ruang</span>
                      </a>
            
                    <li class="nav-item">
                      <a class="nav-link  {{ request()->is('inventaris') ? 'active' : '' }}" href="inventaris">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-boxes-stacked" style="color: hotpink"></i>
                        </div>
                        <span class="nav-link-text ms-1">Inventarisir</span>
                      </a>

                    <li class="nav-item">
                      <a class="nav-link  {{ request()->is('peminjaman') ? 'active' : '' }}" href="peminjaman">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-boxes-stacked" style="color: hotpink"></i>
                        </div>
                        <span class="nav-link-text ms-1">Peminjaman</span>
                      </a>
                    
                    <li class="nav-item">
                      <a class="nav-link  {{ request()->is('peminjaman') ? 'active' : '' }}" href="pengembalian">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-rotate-right" style="color: hotpink"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pengembalian</span>
                      </a>
                    </li>
            
                    <li class="nav-item">
                      <a class="nav-link  {{ request()->is('laporan') ? 'active' : '' }}" href="laporan">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="fa-regular fa-newspaper" style="color: hotpink"></i>
                        </div>
                        <span class="nav-link-text ms-1">Generate Laporan</span>
                      </a>
                    </li>

                    <form action="/logout" method="post">
                        @csrf
                        &emsp;&emsp;<button type="submit" class="btn bg-gradient-primary mt-4 px-3" style="font-size: x-small">Keluar</button>
                    </form>
                  </ul>
                </div>
            
              </aside>
              <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
                <!-- Navbar -->
                <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
                  <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                    </nav>
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                          <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                      </div>
                    </div>
                  </div>
                </nav>
                <div class="content-wrapper">
                  @yield('admin')
                </div>
                <!-- End Navbar -->
              </main>
              
            </body>
            
            </html>
