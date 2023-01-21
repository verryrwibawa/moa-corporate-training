<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="/img/Logo_PPU_STPN.png" />

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css
    "
    />
    <link rel="stylesheet" href="/css/admin/style.css" />
  </head>

  <body>
    <div class="main-container d-flex">
      <!-- SIDEBAR -->
      <div class="sidebar position-relative" id="side_nav">
        <div class="header-box px-3 pt-4 pb-4 d-flex justify-content-center me-4"> 
          <h1 class="fs-5 text-center text-white ms-3">DASHBOARD<br />ADMIN</h1>
        </div>

        <ul class="list-unstyled px-2">
          {{-- Dashboard --}}
          <li class="my-2 active">
            <a href="/dashboard" class="text-decoration-none d-flex px-3 py-2 d-block"
              ><span class="material-symbols-outlined fs-5 d-flex align-items-center me-3"> home </span> Dashboard</a
            >
          </li>

          {{-- Header --}}
          <li class="my-2">
            <a href="/admin/header" class="text-decoration-none d-flex px-3 py-2 d-block"
              ><span class="material-symbols-outlined fs-5 d-flex align-items-center me-3">
                stars
                </span> Header</a
            >
          </li>

          {{-- About Us --}}
          <li class="my-2">
            <a href="/admin/about" class="text-decoration-none d-flex px-3 py-2 d-block"
              ><span class="material-symbols-outlined fs-5 d-flex align-items-center me-3"> report </span> About Us</a
            >
          </li>

          {{-- Program Kami --}}
          <li class="my-2">
            <a href="/admin/program" class="text-decoration-none d-flex px-3 py-2 d-block"
              ><span class="material-symbols-outlined fs-5 d-flex align-items-center me-3"> featured_play_list </span> Program</a
            >
          </li>
          
          {{-- Benefit --}}
          <li class="my-2">
            <a href="/admin/benefit" class="text-decoration-none d-flex px-3 py-2 d-block"
              ><span class="material-symbols-outlined fs-5 d-flex align-items-center me-3"> favorite </span> Benefit</a
            >
          </li>          
          
          {{-- Client --}}
          <li class="my-2">
            <a href="/admin/client" class="text-decoration-none d-flex px-3 py-2 d-block"
              ><span class="material-symbols-outlined fs-5 d-flex align-items-center me-3"> person </span> Client</a
            >
          </li>    
          
          {{-- Testimoni --}}
          <li class="my-2">
            <a href="/admin/testimoni" class="text-decoration-none d-flex px-3 py-2 d-block"
              ><span class="material-symbols-outlined fs-5 d-flex align-items-center me-3"> quiz </span> Testimoni</a
            >
          </li>    
          
          {{-- Konsultasi --}}
          <li class="my-2">
            <a href="/admin/konsultasi" class="text-decoration-none d-flex px-3 py-2 d-block"
              ><span class="material-symbols-outlined fs-5 d-flex align-items-center me-3"> support_agent </span> Konsultasi</a
            >
          </li>              

          <hr class="h-color mx-3" />
          <li class="mt-auto">
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="btn__logout text-decoration-none d-flex px-3 py-2 d-block bg-transparent text-white border-0"><span class="material-symbols-outlined fs-5 d-flex align-items-center me-3"> logout </span> logout</button>
            </form>
          </li>
        </ul>
      </div>

      <div class="d-flex align-items-center justify-content-center content">
        <h1 class="display-2">Welcome, {{ auth()->user()->name }}!</h1>
      </div>
    </div>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/admin/navbar.js"></script>
  </body>
</html>
