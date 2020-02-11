<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NKTI Blood Bank</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('asset/css/font_awesome.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}" >
    <link rel="stylesheet" href="{{asset('asset/css/shards-dashboards.1.1.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/extras.1.1.0.min.css')}}">
    @yield('styles')
    <script  src="{{asset('asset/js/buttons.js')}}"></script>
  </head>
  <body class="h-100">
    <div class="color-switcher animated">
      <h5>Accent Color</h5>
      <ul class="accent-colors">
        <li class="accent-primary active" data-color="primary">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-secondary" data-color="secondary">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-success" data-color="success">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-info" data-color="info">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-warning" data-color="warning">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-danger" data-color="danger">
          <i class="material-icons">check</i>
        </li>
      </ul>
      <div class="actions mb-4">
        <a class="mb-2 btn btn-sm btn-primary w-100 d-table mx-auto extra-action" href="https://designrevision.com/downloads/shards-dashboard-lite/">
          <i class="material-icons">cloud</i> Download</a>
        <a class="mb-2 btn btn-sm btn-white w-100 d-table mx-auto extra-action" href="https://designrevision.com/docs/shards-dashboard-lite">
          <i class="material-icons">book</i> Documentation</a>
      </div>    
      <div class="close">
        <i class="material-icons">close</i>
      </div>
    </div>
    <div class="color-switcher-toggle animated pulse infinite">
      <i class="material-icons">settings</i>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        @include('layouts.sidebar')
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
          @include('layouts.navbar')
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            @yield('header')
            <!-- End Page Header -->
            <!-- Small Stats Blocks -->
            <div class="row">
              @yield('content')
            </div>
              <!-- End Top Referrals Component -->
            </div>
          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
            </ul>
            <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
              <a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
            </span>
          </footer>
        </main>
      </div>
    </div>
    <div class="promo-popup animated">
      <a href="https://www.nkti.gov.ph" class="pp-cta extra-action">
      <img src="{{asset('asset/img/cp3.PNG')}}"> </a>
      <div class="pp-intro-bar"> Check our Homepage
        <span class="close">
          <i class="material-icons">close</i>
        </span>
        <span class="up">
          <i class="material-icons">keyboard_arrow_up</i>
        </span>
      </div>
      <div class="pp-inner-content">
        <h2>National Kidney Transplant Institution</h2>
        <p>Phone: (63) (2) 8981-0300, 8981-0400</p>
        <a class="pp-cta extra-action" href="https://www.nkti.gov.ph">GO</a>
      </div>
    </div>
    <script src="{{asset('asset/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('asset/js/popper.js')}}" ></script>
    <script src="{{asset('asset/js/bootsrap.js')}}"></script>
    <script src="{{asset('asset/js/chart.js')}}"></script>
    <script src="{{asset('asset/js/shards.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery-sharre.js')}}"></script>
    <script src="{{asset('asset/js/extras.1.1.0.min.js')}}"></script>
    <script src="{{asset('asset/js/shards-dashboards.1.1.0.min.js')}}"></script>
    <script src="{{asset('asset/js/app-blog-overview.1.1.0.js')}}"></script>
    @yield('scripts')
  </body>
</html>