
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <link href="/front/img/icon.png" rel="icon">
  <link href="/front/img/icon.png" rel="icon">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
      
        </form>
        <ul class="navbar-nav navbar-right">
          
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="http://localhost/template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name; }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="http://localhost/template/dist/features_profile" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="http://localhost/template/dist/features_activities" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="http://localhost/template/dist/features_settings" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="http://localhost/template/dist/index">RSD Madani</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="http://localhost/template/dist/index">RSD</a>
          </div>

          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li>
              <a href="" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li>
              <a href="/" target="_blank" class="nav-link"><i class="fas fa-eye"></i><span>Lihat Website</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th"></i></i> <span>Data Master</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/sliders">Data Sliders</a></li>
                <li><a class="nav-link" href="">Transparent Sidebar</a></li>
                <li><a class="nav-link" href="">Top Navigation</a></li>
              </ul>
            <li class="dropdown ">
                <a href="" class="nav-link"><i class="fas fa-fire"></i><span>Pages</span></a>
            </li>
            
          </ul>

          {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div> --}}
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('title')</h1>
          </div>




          <div class="section-body">
            
            @yield('content')


          </div>






        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; {{ date('Y') }} <div class="bullet"></div> Create By Mr. Q
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="/assets/modules/jquery.min.js"></script>
  <script src="/assets/modules/popper.js"></script>
  <script src="/assets/modules/tooltip.js"></script>
  <script src="/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="/assets/modules/moment.min.js"></script>
  <script src="/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <script src="/assets/js/custom.js"></script>
  {{-- <script>
    var tabelData = $('#table');

    $(document).ready(function() {
        tabelData.DataTable({ // -> tabel
            "processing": true,
            "columnDefs": [{
                "target": [-1],
                "orderable": false
            }]
        });
    });
    </script> --}}
</body>
</html>